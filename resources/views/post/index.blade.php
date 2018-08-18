<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Document</title>
</head>

<body>
	<div class="container">

		<div class="row justify-content-center mt-5">
			<div class="col-md-8">
				<form action="" id="form">
					<input type="text" class="form-control" id="search" placeholder="Search...">
				</form>
			</div>
		</div>

		<h1>Laravel 5.6 AJAX Pagination Example</h1>
		<table class="table table-bordered load" style="position:relative">

			<thead>

				<tr>


					<th>id</th>
					<th>Name</th>

				</tr>

			</thead>

			<tbody>

				@foreach ($posts as $tag)

				<tr>


					<td>{{ $tag->id }}</td>
					<td>{{ $tag->title }}</td>

				</tr>
				@endforeach

			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">
						{{ $posts->links() }}
					</td>
				</tr>
			</tfoot>
		</table>





	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){

		

			$("#search").on("keyup",function(){
				var val = $("#search").val();
				console.log(val)

				if(val == ''){
					window.location.href = "{{URL::to('/view-post')}}";
				}else{
					
							var url = "{{URL::to('/view-post')}}/"+val;

								$.ajax({			
									url:url
								})
								.done(function(data){
									$(".load").html(data);
								})


				}	

			})


		});

		$(document).on("click",".pagination a",function(e){
			e.preventDefault();
			$('.load').append('<img style="position: absolute; left: 50%; top: 0px; z-index: 100000;" src="{{asset('giphy.gif')}}" />');
			// var url  = $(this).attr("href").split("page=")[1];			
			var url  = $(this).attr("href");
			window.history.pushState("", "", url);
			// console.log(url);
			$.ajax({
				// url:'ajax?page='+url				
				url:url
			})
			.done(function(data){
				$(".load").html(data);
				// location.hash=url
			})
		});
	</script>





</body>

</html>