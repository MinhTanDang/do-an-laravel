! function(t) {
    "use strict";
    var e = function() {};
    e.prototype.init = function() {
        t("#sa-warning").click(function() {
            Swal.fire({
                title: "Bạn có chắc xóa không?",
                text: "Bạn sẽ không thể khôi phục lĩnh vực này!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Xóa",
                cancelButtonText: "Hủy"
            }).then(function(t) {
                t.value && Swal.fire("Đã xóa", "", "success");
            })
        })
    }, t.SweetAlert = new e, t.SweetAlert.Constructor = e
}(window.jQuery),
function(t) {
    "use strict";
    window.jQuery.SweetAlert.init()
}();