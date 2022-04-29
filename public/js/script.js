$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("ubah Data");
    $(".modal-body form").attr("action", "http://localhost/phpmvc/public/mahasiswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#prodi").val(data.prodi);
        $("#nim").val(data.nim);
        $("#alamat").val(data.alamat);
        $("#email").val(data.email);
        $("#id").val(data.id);
      },
    });
  });
});
