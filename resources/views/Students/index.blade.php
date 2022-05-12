<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <div>
        <div class="">
            <nav class="navbar navbar-dark bg-dark mb-5">
                <div class="container-fluid ">
                <a class="navbar-brand" href="/students">CRUD Application</a>
                <a class="position-absolute top-50 end-0 translate-middle-y btn btn-outline-light me-3" href="/students/create">Ajouter étudiant</a>
                </div>
            </nav>
        </div>
        <div class="container" style="display:flex; flex-flow: row wrap; gap: 20px; justify-content: space-around">
        @foreach($students as $student)

            <div style="flex-basis: 20%">
                <div class="card text-white bg-dark mb-3" style="width: 18rem; height: 420px;">
                    <div class="card-header"><h1 class="display-5">{{$student -> nom}}</h1></div>
                    <div class="card-body">
                        <h5 class="card-title">CNE: {{$student->cne}}</h5>
                        <h5 class="card-title">CIN: {{$student->cin}}</h5>
                        <p class="card-text"><span class="fw-bold">Date de naissance:</span> {{$student->naissance}}</p>
                        <p class="card-text"><span class="fw-bold">Filière:</span> {{$student->filiere}}</p>
                        <p class="card-text"><span class="fw-bold">Adresse Email:</span> {{$student->email}}</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-outline-light position-absolute bottom-0 start-0 ms-4 mb-4"  type="button" href="/students/{{$student->cne}}/edit">Modifier</a>
                            <a class="btn btn-outline-light position-absolute bottom-0 end-0 me-4 mb-4" href="/students/{{$student->cne}}/delete" >Supprimer</a>
                            
                          </div>
                    </div>
                </div>
            </div>

        @endforeach
        </div>
    </div>
</body>
</html>