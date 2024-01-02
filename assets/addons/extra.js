//Global Config
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	$($.fn.dataTable.tables(true)).DataTable()
    	.columns.adjust()
        .responsive.recalc();
 });
$('.dtp').datetimepicker({
    format: 'YYYY-MM-DD'
 });
// $("#tabs").tabs(
//     {
//         activate: function (event, ui) 
//         {        
//           $($.fn.dataTable.tables(true)).DataTable()
//             .columns.adjust()
//             .responsive.recalc();
//         },
//        create: function (event, ui) 
//        {
//           $($.fn.dataTable.tables(true)).DataTable()
//             .columns.adjust()
//             .responsive.recalc();
//         }
//     });



$("input").change(function(){
	$(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
 });
$("textarea").change(function(){
	$(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
 });
$("select").change(function(){
	$(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
 });
$('select').on('click',function(){                
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});
$('input').on('click',function(){                
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});
$('textarea').on('click',function(){                
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});
$('select').blur(function(){                
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});
$('input').blur(function(){                
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});
$('textarea').blur(function(){                
    $(this).parent().parent().removeClass('has-error');
    $(this).next().empty();
});

function money_conv(inp)
{
    var out = parseFloat(inp.replace(/,/g, "")).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return out;
};

function money_convint(inp)
{
    var out = parseInt(inp.replace(/,/g, "")).toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return out;
};

function money_rev(inp)
{
    var out = parseFloat(inp.replace(/,/g, ""));
    return out;
};

$('.curr-num').number(true);
$('.curr-num-perc').number(true,2);

function resizetarea(id) 
{
    var textarea = $('#'+id)[0];
    textarea.style.height = '0px';
    textarea.style.height = (textarea.scrollHeight) + 'px';
}