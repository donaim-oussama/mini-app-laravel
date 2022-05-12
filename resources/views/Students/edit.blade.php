<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-secondary">

    <div class="">
        <nav class="navbar navbar-dark bg-dark mb-5">
            <div class="container-fluid ">
            <a class="navbar-brand" href="/students">CRUD Application</a>
            <a class="position-absolute top-50 end-0 translate-middle-y btn btn-outline-light me-3" href="/students/create">Ajouter étudiant</a>
            </div>
        </nav>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle" style="min-width: 400px">
        <form action="/students/{{$student->cne}}" method="POST">
        
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">CNE</label>
                <input class="form-control" type="text" name="cne" value="{{$student->cne}}" aria-label="readonly input example" readonly>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">CIN</label>
                <!--input type="text" class="form-control" id="exampleFormControlInput1" value="{{$student->cin}}"-->
                <input class="form-control" type="text" name="cin" value="{{$student->cin}}" aria-label="readonly input example" readonly>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom complet</label>
                <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" value="{{$student->nom}}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date de naissance</label>
                <input type="date" name="naissance" class="form-control" id="exampleFormControlInput1" value="{{$student->naissance}}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Filière</label>
                <input class="form-control" name="filiere" list="datalistOptions" id="exampleDataList" value="{{$student->filiere}}">
                <datalist id="datalistOptions">
                    <option value="IAGI">
                    <option value="GM">
                    <option value="GEM">
                    <option value="MSEI">
                    <option value="GI">
                </datalist>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse électronique</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{$student->email}}">
            </div>
            <button type="submit" class="btn btn-outline-dark mb-2" >Modifier</button>
            <a href="/students" class="btn btn-outline-dark mb-2 position-absolute bottom-0 end-0">Retour</a>
            



        </form>
    </div>
</body>
</html>