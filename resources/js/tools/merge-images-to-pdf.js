let dropArea;
let fileInput;
let previewList;
let selectedFiles = []; // keep actual File objects

var MergeImagesToPDF = function () {
    // Render preview
    function renderPreview() {
        previewList.empty();
        selectedFiles.forEach((file, index) => {
            let reader = new FileReader();
            reader.onload = function (e) {
                let li = $(`
                    <li class="border rounded p-2 position-relative" 
                        style="width: 150px; height: 150px; overflow:hidden;" data-index="${index}">
                        <img src="${e.target.result}" class="img-fluid" 
                             style="max-height:100%; display:block; margin:auto;">
                        <span class="remove-btn btn btn-sm btn-danger position-absolute top-0 end-0 m-1">&times;</span>
                    </li>
                `);

                // Remove button
                li.find(".remove-btn").on("click", function () {
                    selectedFiles.splice(index, 1);                    
                    renderPreview();
                });
                previewList.append(li);
            };
            reader.readAsDataURL(file);
        });
        if(selectedFiles.length <= 0) {
            $("#preview_images_container").hide();
        } else {
            $("#preview_images_container").show();
        }
    }

    // Handle File Upload
    function handleFiles(files) {
        [...files].forEach(file => {
            if (file.type.startsWith("image/")) {
                selectedFiles.push(file);
            }
        });
        renderPreview();
    }

    return {
        init: function () {
            dropArea = $("#dropArea");
            fileInput = $("#fileInput");
            previewList = $("#previewList");

            // Click -> file input
            dropArea.on("click", function () {
                fileInput[0].click();
            });
            

            // File input change
            fileInput.on("change", function (e) {
                handleFiles(e.target.files);
                fileInput.val(""); // reset so same file can be chosen again
            });

            // Drag & Drop
            dropArea.on("dragover", function (e) {
                e.preventDefault();
                dropArea.addClass("bg-primary text-white");
            });

            dropArea.on("dragleave", function (e) {
                e.preventDefault();
                dropArea.removeClass("bg-primary text-white");
            });

            dropArea.on("drop", function (e) {
                e.preventDefault();
                dropArea.removeClass("bg-primary text-white");
                handleFiles(e.originalEvent.dataTransfer.files);
            });

            // On form submit → send FormData
            $("#imageForm").on("submit", function (e) {
                e.preventDefault();

                if (selectedFiles.length === 0) {
                    Swal.fire({icon:"error",title:"oops",text:"Please upload at least one image."});
                    return;
                }

                let formData = new FormData(this);
                selectedFiles.forEach((file, i) => {
                    formData.append("images[]", file);
                });

                $.ajax({
                    url: $(this).attr("action"),
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    xhrFields: { responseType: 'blob' },                   
                    beforeSend : function(){
                        $("#merge_download_pdf_btn").html(`<span class="spinner-border spinner-border-sm" 
                                role="status" aria-hidden="true"></span> Please Wait...`);
                        $("#merge_download_pdf_btn").attr("disabled", true)
                    },
                    complete: function() {
                        $("#merge_download_pdf_btn").text(`Merge & Download PDF`);
                        $("#merge_download_pdf_btn").attr("disabled", false);
                    },
                    success: function (data) {
                        let blob = new Blob([data], { type: "application/pdf" });
                        let link = document.createElement("a");
                        link.href = window.URL.createObjectURL(blob);
                        link.download = "toolhubspot-merged-images.pdf";
                        link.click();
                    },
                    error: function () { 
                        Swal.fire({icon:"error",title:"oops",text:"Something wrong, please check your images and try again later."});                    
                    }
                });
            });
        }
    };
}();

// Initialize when page loads
$(function () {
    MergeImagesToPDF.init();
});
