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

		<div class="infinite-scroll">
			@foreach($posts as $comment)
			<h4 class="media-heading">{{ $comment->title }}
				<small>{{ $comment->created_at->diffForHumans() }}</small>
			</h4>

			<hr> @endforeach {{ $posts->links() }}
		</div>

	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.js"></script>

	<script type="text/javascript">
		$('ul.pagination').hide();
	    $(function() {
	        $('.infinite-scroll').jscroll({
	            autoTrigger: true,
	            loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
	            padding: 0,
	            nextSelector: '.pagination li.active + li a',
	            contentSelector: 'div.infinite-scroll',
	            callback: function() {
	                $('ul.pagination').remove();
	            }
	        });
	    });
	</script>





</body>

</html>