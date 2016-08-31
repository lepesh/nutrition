<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Питание</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ app('request')->is('/') ? 'active' : '' }}"><a href="/">Главная</a></li>
                <li class="{{ app('request')->is('feedback') ? 'active' : '' }}"><a href="/feedback">Обратная связь</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>