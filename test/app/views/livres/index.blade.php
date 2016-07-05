<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Recherche</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<form method="POST" action="{{ URL::action}}">
<h1>Rechercher une ressource</h1>
<div class="input-group">
      	<input type="text" class="form-control" placeholder="Rechercher...">
      	<span class="input-group-btn">
        	<button href="{{ URL::to('/') }}" class="btn btn-primary " type="button">Recherche</button>
      	</span>
</div>
  
<!--
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Édition</th>
        <th>Parution</th>
        <th>Langue</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        	@foreach ($livres as $livre)
				<p>{{ $livre->id }}</p>
			@endforeach
		</td>
        <td>
        	@foreach ($livres as $livre)
				<p>{{ $livre->titre }}</p>
			@endforeach
		</td>
        <td>
        	@foreach ($livres as $livre)
				<p>{{ $livre->auteur }}</p>
			@endforeach
        </td>
        <td>
        	@foreach ($livres as $livre)
				<p>{{ $livre->edition }}</p>
			@endforeach
        </td>
        <td>
        	@foreach ($livres as $livre)
				<p>{{ $livre->annee }}</p>
			@endforeach
        </td>
        <td>
        	@foreach ($livres as $livre)
				<p>{{ $livre->langue }}</p>
			@endforeach
        </td>
        <td> @foreach ($livres as $livre)
        		<img src="loupe.jpg" alt="" height="30" width="30">
      		@endforeach
      	</td>
      </tr>
    </tbody>
  </table>
-->
</form>
</body>
</html>
