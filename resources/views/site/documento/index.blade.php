@extends('site.site') 
@section('site')
    <!-- conteudo -->
    <div class="container mt-3 mb-3">
        <h1>Documento</h1>

        <div class="row">
            <div class="col-4">

                <div id="livro" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#c1">Capítulo 1</a>
                    <a class="list-group-item list-group-item-action" href="#c2">Capítulo 2</a>
                    <a class="list-group-item list-group-item-action" href="#c3">Capítulo 3</a>
                    <a class="list-group-item list-group-item-action" href="#c4">Capítulo 4</a>
                    <a class="list-group-item list-group-item-action" href="#c5">Capítulo 5</a>
                    <a class="list-group-item list-group-item-action" target="blank" href="site/notebook.pdf">Documento Completo</a>
                </div>
            </div>
            <div class="col-8" id="caixaLivro" style="position: relative; height: 500px; overflow: auto">

                <div data-spy="scroll" data-target="#livro" data-offset="0">
                    <h3 id="c1">Capítulo 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus nibh mauris, at 
                        lacinia urna venenatis eu. Aenean sollicitudin mi eu neque maximus, nec accumsan sapien 
                        porta. Aenean lorem tortor, dignissim quis sapien sit amet, pellentesque dapibus urna. 
                        Nunc eu tincidunt ex, non volutpat ipsum. Proin mollis ultricies ex, ac venenatis turpis 
                        dictum lacinia. Etiam posuere eros ac sapien bibendum volutpat. Integer ut nunc sit amet 
                        nulla hendrerit porttitor. Vestibulum vestibulum vel augue non tempor. Proin et libero 
                        mattis dolor blandit lobortis a non urna.</p>

                    <h3 id="c2">Capítulo 2</h3>
                    <p>Pellentesque interdum mi nec nulla mattis pharetra. Sed id mauris lectus. Vestibulum 
                        sagittis mi non orci pharetra tempus. Fusce facilisis tristique mollis. Nulla at gravida 
                        odio. Vestibulum finibus tellus quis ligula faucibus, vitae faucibus est porttitor. Orci 
                        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec 
                        dictum mollis egestas. Ut pellentesque, urna vel ornare rutrum, orci libero vestibulum
                         nibh, et pretium augue lorem rutrum leo. Quisque dignissim egestas eros, ac tincidunt 
                         ex auctor quis. Sed pharetra enim sapien, sit amet aliquet lorem tincidunt ut. Fusce eu 
                         tempus magna. Suspendisse porta risus sodales ex fermentum porttitor.</p>

                    <h3 id="c3">Capítulo 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus nibh mauris, at 
                        lacinia urna venenatis eu. Aenean sollicitudin mi eu neque maximus, nec accumsan sapien 
                        porta. Aenean lorem tortor, dignissim quis sapien sit amet, pellentesque dapibus urna. 
                        Nunc eu tincidunt ex, non volutpat ipsum. Proin mollis ultricies ex, ac venenatis turpis 
                        dictum lacinia. Etiam posuere eros ac sapien bibendum volutpat. Integer ut nunc sit amet 
                        nulla hendrerit porttitor. Vestibulum vestibulum vel augue non tempor. Proin et libero 
                        mattis dolor blandit lobortis a non urna.</p>

                    <h3 id="c4">Capítulo 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus nibh mauris, at 
                        lacinia urna venenatis eu. Aenean sollicitudin mi eu neque maximus, nec accumsan sapien 
                        porta. Aenean lorem tortor, dignissim quis sapien sit amet, pellentesque dapibus urna. 
                        Nunc eu tincidunt ex, non volutpat ipsum. Proin mollis ultricies ex, ac venenatis turpis 
                        dictum lacinia. Etiam posuere eros ac sapien bibendum volutpat. Integer ut nunc sit amet 
                        nulla hendrerit s, at lacinia urna venenatis eu. Aenean sollicitudin mi eu neque maximus, 
                        nec accumsan sapien porta. Aenean lorem tortor, dignissim quis sapien sit amet, 
                        pellentesque dapibus urna. Nunc eu tincidunt ex, non volutpat ipsum. Proin mollis 
                        ultricies ex, ac venenatis turpis dictum lacinia. Etiam posuere eros, at lacinia urna 
                        venenatis eu. Aenean sollicitudin mi eu neque maximus, nec accumsan sapien porta. Aenean
                         lorem tortor, dignissim quis sapien sit amet, pellentesque dapibus urna. Nunc eu 
                         tincidunt ex, non volutpat ipsum. Proin mollis ultricies ex, ac venenatis turpis 
                         dictum lacinia. Etiam posuere eroporttitor. Vestibulum vestibulum vel augue non tempor. 
                         Proin et libero mattis dolor blandit lobortis a non urna.</p>

                    <h3 id="c5">Capítulo 5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus nibh mauris, at 
                        lacinia urna venenatis eu. Aenean sollicitudin mi eu neque maximus, nec accumsan sapien
                         porta. Aenean lorem tortor, dignissim quis sapien sit amet, pellentesque dapibus urna. 
                         Nunc eu tincidunt ex, non volutpat ipsum. Proin mollis ultricies ex, ac venenatis turpis 
                         dictum lacinia. Etiam posuere eros ac sapien bibendum volutpat. Integer ut nunc sit amet 
                         nulla hendrerit porttitor. Vestibulum vestibulum vel augue non tempor. Proin et libero 
                         mattis dolor blandit lobortis a non urna.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- fim conteudo -->
@endsection