// $(document).ready(function(){
//     $('.changeQuantity').click(function(e){
//         var quantity=$(this).closest('.cartpage').find('.qty-input').val();
//         var product_id=$(this).closest('.cartpage').find('.product_id').val(); 
//         var data={
//             '_token':$('input[name=_token]').val(),
//             'quantity':quantity,
//             'product_id':product_id
//         } ;
//         $.ajax({
//             url:'/update-cart',
//             type:'POST',
//             data:data,
//             success:function(response){
//                 window.location.reload();
//                 alertify.set('notifier','position', 'top-right');
//                 alertify.success(response.status);
//             }
//         }) ;    
//     });
// })
$(".update-cart").click(function (e) {
    e.preventDefault();
    var ele = $(this);
    $.ajax({
    url: "{{ url('update-cart') }}",
    method: "patch",
    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity:
    ele.parents("tr").find(".quantity").val()},
    success: function (response) {
        window.location.reload(); 
    }
});
});