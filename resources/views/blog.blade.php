<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>




    </style>
</head>

<body>
    <h1>Blog</h1>
    @foreach ($posts as $item)





<div class="blog-wrapper">
	<div class="blog-card">
		<div class="card-img"><img src="https://images.unsplash.com/photo-1518235506717-e1ed3306a89b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
			<h1>Olivotti's Blog</h1>
		</div>
		<div class="card-details"><span><strong>{{ $item->title  }} </strong></span><span></div>
		<div class="card-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p></div>
		<div class="read-more">Read More</div>
	</div>

</div>
@endforeach
</body>

</html>
