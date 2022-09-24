<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is Dom mainpulate</title>
    <style>
        .red{

            color:red;
        }
        .background{
            background-color: green;
        }

        .white{
            color: rgb(245, 252, 245);
        }
        .fontSize{
            font-size: 30px;
        }
        .padding{
            padding: 30px;
        }
        .more{
            display:none;
        }
    </style>
</head>
<body>
<p class="read-more">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum praesentium odit quaerat ut fuga fugiat repellat sunt labore, mollitia in itaque aperiam garden cupiditateI cupiditateI cupii I  am ayub <span class="more"></span>Consequuntur minima iure sequi natus neque quis? Quibusdam recusandae, quos repudiandae vero earum sit eligendi? Perferendis rerum sunt repudiandae dicta dolorum  quia placeat odit beatae possimus eius corporis aperiam quisquam magni laboriosam atque facilis enim, excepturi iusto qui at facere temporibus eveniet iure numquam. Consectetur provident cumque officia odit, accusantium placeat vero repudiandae modi cum. Consequatur repudiandae voluptatum soluta, ipsam adipisci doloribus tempora cum repellat facere sunt, nulla quaerat illo fugiat dolores aspernatur esse natus vero non nesciunt sint est? Voluptas nemo magni doloremque obcaecati ipsum ipsam debitis cum quisquam. Consequuntur exercitationem, nostrum fugit corporis placeat non, adipisci molestiae eligendi ab officiis sed dignissimos dolores iste sunt minus provident facilis. Quae quidem minima inventore laudantium perferendis sunt, eaque cupiditate rem error? Est voluptatum animi aliquid a nemo velit minima porro dolorum eveniet exercitationem placeat vitae sunt cupiditate alias quasi quia facilis voluptatibus numquam ex quisquam itaque officia adipisci, non aperiam. Provident a nostrum cum cumque commodi labore perspiciatis pariatur id placeat! Totam, earum laudantium! Nulla, rerum ipsa laboriosam mollitia, velit culpa, labore asperiores fugiat porro dolor voluptas? Adipisci ullam nam sunt blanditiis a unde esse consequatur, fuga ipsam eum, assumenda iusto modi voluptatibus! Sed, amet error ipsam molestias repudiandae labore animi aut est eveniet ab, rerum minima omnis. Reprehenderit rem assumenda libero aperiam culpa voluptatum quibusdam laboriosam eius, consectetur iste obcaecati minima magni ipsa eveniet natus veritatis numquam odio dolores tenetur atque! Enim fuga deserunt asperiores quas distinctio beatae laboriosam exercitationem? Accusantium cum ut officia rem reiciendis, neque magni sequi atque odit soluta, eligendi distinctio ad optio quibusdam? Ex eaque modi obcaecati doloremque tenetur hic consectetur voluptatum dolor, perspiciatis quidem est reprehenderit.</p>
   
    <hr>

<br>



    <h2 id="myheading">Hellow I am dom mainpuate</h2>
    <button id="readMore">Read more</button>

<button id="btn1">color</button>
<button id="btn2">background</button>
    <script src="{{asset('backend/js/jquery.js')}}"></script>


    <script>

$('#myheading').css('red background');
$('#myheading').css('white background');
$('#btn1').on('click',function(){

$('#myheading').addClass('red background');

});

$('#btn2').on('click',function(){

$('#myheading').addClass('white background');

});
//read more click dynamic

let fullContent= $('.read-more').text();
let lessContent=fullContent.slice(0,200);
$('.read-more').html(lessContent +'...'+'<a id="read-more">Read more</a>');
$('#read-more').css('color','red')

$(document).on('click','#read-more',function(){
  $('.read-more') .html(fullContent+ '<a id="read-less">Read less</a>') 
  $('#read-less').css('color','green')

});

$(document).on('click','#read-less',function(){
    $('.read-more').html(lessContent +'...'+'<a id="read-more">Read more</a>');
    $('#read-more').css('color','red')
})

    </script>
</body>
</html>
