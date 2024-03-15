$(document).ready(function () {
    $("#datatable").DataTable({
        responsive: true,
        ordering: false,
    });

    $(".select2").select2();
});

// Custom Image Upload Live Preview Start
$(".liveImage").change(function () {
    let reader = new FileReader();
    reader.onload = (e) => {
        $(".previewImage").attr("src", e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
});
