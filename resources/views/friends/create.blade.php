


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>新規追加</title>
</head>
<body>
    
    @include('commons.header')
    
    <main>
        <form class = "p-5" style = "width:80%;">
            {!! Form::open(['route' => 'friends.store']) !!}
            <div class="form-group">
                <label for="exampleFormControlInput1">Date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                    <option value="">{{old('category')}}</option>
                    <option value="work" @if(old('category')=='work') selected @endif>Work</option>
                    <option value="school" @if(old('category')=='school') selected @endif>School</option>
                    <option value="club" @if(old('category')=='club') selected @endif>Club</option>
                    <option value="hobby" @if(old('category')=='hobby') selected @endif>Hobby</option>
                    <option value="leisure" @if(old('category')=='leisure') selected @endif>Leisure</option>
                </select>
            </div>

            <div class="form-group">
                {!! Form::label('memo', 'Memo') !!}
                {!! Form::textarea('memo', old('memo'), ['class' => 'form-control']) !!}
            </div>

            <div class="text-right">
                {!! Form::submit('Add', ['class' => 'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
            </div>
        </form>
    </main>
    
    @include('commons.footer') 
</body>
</html>
    

