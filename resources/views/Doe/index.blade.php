<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doe sangue! Doe vida!</title>
    <link rel="icon" href="{{url(mix('assets/images/logo.png'))}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="{{url(mix('Doe/css/style.css'))}}">

    <header>
    	<img src="{{url(mix('assets/images/logo.png'))}}" class="logo" alt="Imagem DOE">
    	<h2>A sua doação importa</h2>
    	<p>Até 3 vidas com 1 doação</p>
    	<p>Mais de 38.000 doações são necessárias todos os dias</p>
    	<p>Apenas 1,9% da população brasileira doa sangue.</p>
        @if(session('message'))
            <div class="container alert alert-danger">
                {{session('message')}}
            </div>
        @endif
    	<button type="submit" class="btn btn-danger">Quero ajudar</button>
    </header>

    <section class="form hide container">
        <div class="row">
            <div class="col-md-6 d-flex align-self-center">
              <h2>Entre na lista de doadores</h2>  
            </div>
        	<div class="col-md-6">
                <form action="{{route('donor.do')}}" method="post">
                    @csrf
                    <input type="text" name="name" required placeholder="Nome Completo">
                    <input type="email" name="email" required placeholder="Seu melhor email">
                    <input type="text" name="blood" placeholder="Tipo Sanguíneo" required>
                    <button type="submit" class="btn">Quero Ajudar</button>
                </form>
            </div>
    </div>
    	
    </section>
    <main class="container">
        <h2>Últimos <span>doadores</span></h2>
      <section class="doadores">
        <div class="row">
           @foreach($donors as $donor)
            <div class="col-md-3 doador">
                <div class="sangue">{{$donor->blood}}</div>
                    <p>{{$donor->name}}</p>
            </div>
       
        @endforeach
    </div>
</section>
</main>
    <footer>
        Keterly Geovana com Rocketseat 
    </footer>


   

    <!-- JavaScript (Opcional) -->
    <script type="text/javascript" src="{{url(mix('Doe/js/script.js'))}}"></script>
    
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>