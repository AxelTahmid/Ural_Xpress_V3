$(document).ready(function () {
  $("#dynamicTable").DataTable({});

  $("#create_invoice").click(function () {
    $("#deliveryModalForm")[0].reset();
    $(".modal-title").text("Create Invoice");
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

  $("#deliveryModalForm").on("submit", function (event) {
    event.preventDefault();
    $.ajax({
      url: "/DeliverySuperAdmin/action_invoice",
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
          $("#dynamicTable").DataTable().reload();
          setTimeout(function () {
            $("#err_message").html("");
          }, 5000);
        }
      },
    });
  });
});

// $(document).ready(function () {
//   $(document).on("click", ".ajaxMerchantSave", function () {
//     // validaton conditonals
//     if ($.trim($(".mer_name").val()).length == 0) {
//       error_name = "Please Enter Your Full Name";
//       $("#error_mer_name").text(error_name);
//     } else {
//       error_name = "";
//       $("#error_mer_name").text(error_name);
//     }
//     if ($.trim($(".mer_phone").val()).length == 0) {
//       error_phone = "Please Enter Your Phone Number";
//       $("#error_mer_phone").text(error_phone);
//     } else {
//       error_phone = "";
//       $("#error_mer_phone").text(error_phone);
//     }
//     if ($.trim($(".business_name").val()).length == 0) {
//       error_business = "Please Enter Your Business Name";
//       $("#error_business_name").text(error_business);
//     } else {
//       error_business = "";
//       $("#error_business_name").text(error_business);
//     }
//     if ($.trim($(".business_type").val()).length == 0) {
//       error_type = "Please Enter Your Business Type";
//       $("#error_business_type").text(error_type);
//     } else {
//       error_type = "";
//       $("#error_business_type").text(error_type);
//     }
//     if ($.trim($(".pickup_add").val()).length == 0) {
//       error_pickup = "Please Enter Your Pickup Address";
//       $("#error_pickup_add").text(error_pickup);
//     } else {
//       error_pickup = "";
//       $("#error_pickup_add").text(error_pickup);
//     }
//     if ($.trim($(".pickup_area").val()).length == 0) {
//       error_area = "Please Enter Your Pickup Area";
//       $("#error_pickup_area").text(error_area);
//     } else {
//       error_area = "";
//       $("#error_pickup_area").text(error_area);
//     }
//     if ($.trim($(".mer_email").val()).length == 0) {
//       error_email = "Please Enter Your Email ";
//       $("#error_mer_email").text(error_email);
//     } else {
//       error_email = "";
//       $("#error_mer_email").text(error_email);
//     }
//     if ($.trim($(".image_url").val()).length == 0) {
//       error_img = "Please Enter Your Image";
//       $("#error_image_url").text(error_img);
//     } else {
//       error_img = "";
//       $("#error_image_url").text(error_img);
//     }

//     //inserting ajax
//     if (
//       error_name != "" ||
//       error_phone != "" ||
//       error_business != "" ||
//       error_type != "" ||
//       error_pickup != "" ||
//       error_area != "" ||
//       error_email != "" ||
//       error_img != ""
//     ) {
//       return false;
//     } else {
//       var data = {
//         merchant_img: $(".image_url").val(),
//         merchant_name: $(".mer_name").val(),
//         merchant_phone: $(".mer_phone").val(),
//         merchant_email: $(".mer_email").val(),
//         merchant_business_name: $(".business_name").val(),
//         merchant_business_type: $(".business_type").val(),
//         merchant_pickup_address: $(".pickup_add").val(),
//         merchant_pickup_area: $(".pickup_area").val(),
//       };

//       $.ajax({
//         method: "POST",
//         url: "/add_merchant",
//         data: data,
//         success: function (response) {
//           $("#addMerchantModal").modal("hide");
//           $("#addMerchantModal").find("input").val("");
//         },
//       });
//     }
//   });
// });
