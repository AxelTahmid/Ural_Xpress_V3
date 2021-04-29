$(document).ready(function () {
  $("#merchantTable").DataTable({
    order: [],
    serverSide: true,
    ajax: {
      url: "/merchants",
      type: "POST",
    },
  });

  $("#deliveryTable").DataTable({
    order: [],
    serverSide: true,
    ajax: {
      url: "/invoices",
      type: "POST",
    },
  });

  $("#create_invoice").click(function () {
    $("#deliveryModalForm")[0].reset();
    $("#deliveryModalLabel").text("Create Invoice");
    $("#recipient_name_err").text("");
    $("#recipient_phone_err").text("");
    $("#delivery_address_err").text("");
    $("#delivery_area_err").text("");
    $("#instructions_err").text("");
    $("#invoice_err").text("");
    $("#invoice_amount_err").text("");
    $("#deliverystatus_err").text("");
    $("#payment_err").text("");
    $("#publication_err").text("");
    $("#action").val("Add");
    $("#submit_button").val("Save");
    $("#deliveryModal").modal("show");
  });

  $("#add_merchant").click(function () {
    $("#merchantModalForm")[0].reset();
    $("#merchantModalLabel").text("Register Merchant");
    $("mer_name_err").text("");
    $("mer_phone_err").text("");
    $("business_name_err").text("");
    $("business_type_err").text("");
    $("pickup_add_err").text("");
    $("pickup_area_err").text("");
    $("mer_email_err").text("");
    $("image_url_err").text("");
    $("#action").val("Add");
    $("#submit_button").val("Save");
    $("#merchantModal").modal("show");
  });

  $("#deliveryModalForm").on("submit", function (event) {
    event.preventDefault();
    $.ajax({
      url: "/invoice_actions",
      method: "POST",
      data: $(this).serialize(),
      dataType: "JSON",
      beforeSend: function () {
        $("#submit_button").val("Saving..");
        $("#submit_button").attr("disabled", "disabled");
      },

      success: function (data) {
        $("#submit_button").val("Save");
        $("#submit_button").attr("disabled", false);

        if (data.error == "yes") {
          $("#recipient_name_err").text(data.recipient_name_err);
          $("#recipient_phone_err").text(data.recipient_phone_err);
          $("#delivery_address_err").text(data.delivery_address_err);
          $("#delivery_area_err").text(data.delivery_area_err);
          $("#instructions_err").text(data.instructions_err);
          $("#invoice_err").text(data.invoice_err);
          $("#invoice_amount_err").text(data.invoice_amount_err);
          $("#deliverystatus_err").text(data.deliverystatus_err);
          $("#payment_err").text(data.payment_err);
          $("#publication_err").text(data.publication_err);
        } else {
          $("#deliveryModal").modal("hide");
          $("#err_message").html(data.err_message);
          $("#deliveryTable").DataTable().ajax.reload();
          setTimeout(function () {
            $("#err_message").html("");
          }, 5000);
        }
      },
    });
  });

  $("#merchantModalForm").on("submit", function (event) {
    event.preventDefault();
    // if ($("#image_url").val() == "") {
    //   alert("Please Select the File");
    //   // $(".btn-success").html("submit");
    //   // $(".btn-success").prop("enabled");
    //   document.getElementById("upload_form").reset();
    // }
    $.ajax({
      url: "/merchant_actions",
      method: "POST",
      data: $(this).serialize(),
      dataType: "JSON",
      beforeSend: function () {
        $("#submit_button").val("Saving..");
        $("#submit_button").attr("disabled", "disabled");
      },

      success: function (data) {
        $("#submit_button").val("Save");
        $("#submit_button").attr("disabled", false);

        if (data.error == "yes") {
          $("#mer_name_err").text(data.mer_name_err);
          $("#mer_phone_err").text(data.mer_phone_err);
          $("#business_name_err").text(data.business_name_err);
          $("#business_type_err").text(data.business_type_err);
          $("#pickup_add_err").text(data.pickup_add_err);
          $("#pickup_area_err").text(data.pickup_area_err);
          $("#mer_email_err").text(data.mer_email_err);
          $("#image_url_err").text(data.image_url_err);
        } else {
          $("#merchantModal").modal("hide");
          $("#err_message").html(data.err_message);
          $("#merchantTable").DataTable().ajax.reload();
          setTimeout(function () {
            $("#err_message").html("");
          }, 5000);
        }
      },
    });
  });

  $(document).on("click", ".edit_invoice", function () {
    var id = $(this).data("id");

    $.ajax({
      url: "/invoice_by_id",
      method: "POST",
      data: { id: id },
      dataType: "JSON",
      success: function (data) {
        $("#recipient_name").val(data.recipient_name);
        $("#recipient_phone").val(data.recipient_phone);
        $("#delivery_address").val(data.recipient_address);
        $("#delivery_area").val(data.recipient_area);
        $("#instructions").val(data.recipient_instructions);
        $("#invoice").val(data.delivery_invoice_no);
        $("#invoice_amount").val(data.delivery_invoice_amount);
        $("#deliverystatus").val(data.delivery_status);
        $("#payment").val(data.delivery_payment_status);
        $("#publication").val(data.publication_status);

        $("#deliveryModalLabel").text("Edit Invoice");

        $("#recipient_name_err").text("");
        $("#recipient_phone_err").text("");
        $("#delivery_address_err").text("");
        $("#delivery_area_err").text("");
        $("#instructions_err").text("");
        $("#invoice_err").text("");
        $("#invoice_amount_err").text("");
        $("#deliverystatus_err").text("");
        $("#payment_err").text("");
        $("#publication_err").text("");

        $("#action").val("Edit");
        $("#submit_button").val("Save");
        $("#deliveryModal").modal("show");
        // hidden id not going in form data, checked in api
        $("#hidden_id").val(id);
      },
    });
  });

  $(document).on("click", ".edit_merchant", function () {
    var id = $(this).data("id");

    $.ajax({
      url: "/merchant_by_id",
      method: "POST",
      data: { id: id },
      dataType: "JSON",
      success: function (data) {
        $("#mer_name").val(data.merchant_name);
        $("#mer_phone").val(data.merchant_phone);
        $("#business_name").val(data.merchant_business_name);
        $("#business_type").val(data.merchant_business_type);
        $("#pickup_add").val(data.merchant_pickup_address);
        $("#pickup_area").val(data.merchant_pickup_area);
        $("#mer_email").val(data.merchant_email);
        $("#image_url").val(data.image_url);

        $("#merchantModalLabel").text("Update Merchant Info");

        $("#mer_name_err").text("");
        $("#mer_phone_err").text("");
        $("#business_name_err").text("");
        $("#business_type_err").text("");
        $("#pickup_add_err").text("");
        $("#pickup_area_err").text("");
        $("#mer_email_err").text("");
        $("#image_url_err").text("");

        $("#action").val("Edit");
        $("#submit_button").val("Save");
        $("#merchantModal").modal("show");
        $("#hidden_id").val(id);
      },
    });
  });

  $(document).on("click", ".delete_invoice", function () {
    var id = $(this).data("id");
    if (confirm("Are you sure you want to delete the invoice?")) {
      $.ajax({
        url: "/del_invoice",
        method: "POST",
        data: { id: id },
        success: function (data) {
          $("#err_message").html(data);
          $("#deliveryTable").DataTable().ajax.reload();
          setTimeout(function () {
            $("#err_message").html("");
          }, 5000);
        },
      });
    }
  });

  $(document).on("click", ".delete_merchant", function () {
    var id = $(this).data("id");
    if (
      confirm(
        "Are you sure you want to delete the Merchant? Action cannot be undone"
      )
    ) {
      $.ajax({
        url: "/del_merchant",
        method: "POST",
        data: { id: id },
        success: function (data) {
          $("#err_message").html(data);
          $("#merchantTable").DataTable().ajax.reload();
          setTimeout(function () {
            $("#err_message").html("");
          }, 5000);
        },
      });
    }
  });
});
