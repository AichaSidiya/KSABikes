$(document).ready(function(){

    allData();

    function filterData()
    {
        $('.filterData').html('<div class="grid"></div>');
        var action = 'fetchData';
        var city = getFilter('city');
        var make = getFilter('make');
        var model = getFilter('model');
        var min = $('#min').val();
        var max = $('#max').val();
        $.ajax({
            url:"fetchData.php",
            method:"POST",
            data:{action:action, city:city, make:make, model:model, min:min, max:max},
            
            success:function(data){
                $('.filterData').html(data);
            }
        });
    }

    function allData()
    {
        $('.filterData').html('<div class="grid"></div>');
        var action = 'allData';
        $("#city").val('');
        $("#make").val('');
        $("#model").val('');
        $("#min").val('');
        $("#max").val('');
        $.ajax({
            url:"allData.php",
            method:"POST",
            data:{action:action},
            
            success:function(data){
                $('.filterData').html(data);
            }
        });
    }
    function getFilter(className)
    {
        var filter = [];
        $('.'+className+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }
    $('.button').click(function(){
        filterData();
    });

    $('.resetButton').click(function(){
        allData();
    });

});