<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div>
        @foreach($persons as $person)
            <div class="panel-body">
                <span>Nom : {{$person->name}}</span><br/>
                <span>Prénom : {{$person->nickname}}</span><br/>
                <span>Date de naissance : {{$person->birthDate}}</span><br/>
                <span>Nombre de like : {{$person->numberLike}}</span><br/>
            </div>
        @endforeach
    </div>
</body>
