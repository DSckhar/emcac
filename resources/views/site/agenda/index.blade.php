@extends('site.site') 
@section('site')

    <meta charset='utf-8' />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

    <link href="{{asset('site/agenda/packages/core/main.css')}}" rel='stylesheet' />
    <link href="{{asset('site/agenda/packages/daygrid/main.css')}}" rel='stylesheet' />
    <link href="{{asset('site/agenda/packages/timegrid/main.css')}}" rel='stylesheet' />
    <script src="{{asset('site/agenda/packages/core/main.js')}}"></script>
    <script src="{{asset('site/agenda/packages/interaction/main.js')}}"></script>
    <script src="{{asset('site/agenda/packages/daygrid/main.js')}}"></script>
    <script src="{{asset('site/agenda/packages/timegrid/main.js')}}"></script>
    <script src="{{asset('site/agenda/packages/core/locales/pt-br.js')}}"></script>
    <script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            defaultDate: "<?php echo date('Y-m-d')?>",
            navLinks: true, // can click day/week names to navigate views
            selectable: false,
            selectMirror: true,
            select: function(arg) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.addEvent({
                        title: title,
                        start: arg.start,
                        end: arg.end,
                        allDay: arg.allDay
                    })
                }
                calendar.unselect()
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                @foreach ($agendas as $key => $agenda)
                
                {
                    title: "{{$agendas[$key]['titulo']}}",
                    description: "{{$agendas[$key]['descricao']}}",
                    start: "{{$agendas[$key]['dInicio']}}",
                    end: "{{date('Y-m-d', strtotime($agendas[$key]['dTermino']. ' + 1 days'))}}",
                    color: "{{$agendas[$key]['cor']}}",
                    url: ""
                },
                @endforeach

                @foreach ($publicacoes as $key => $publicacao)
                
                {
                    title: "{{$publicacoes[$key]['titulo']}}",
                    description: "publicação",
                    start: "{{$publicacoes[$key]['dInicio']}}",
                    end: "{{date('Y-m-d', strtotime($publicacoes[$key]['dTermino']. ' + 1 days'))}}",
                    color: '#993399',
                    url: "publicacao/{{$publicacoes[$key]['id']}}"
                },
                @endforeach
                
            ],

            //abrir modal
            eventClick: function(info) {
                //não abrir url
                info.jsEvent.preventDefault(); // don't let the browser navigate

                //info.el.style.borderColor = 'red';
                dFim = new Date();
                dFim = info.event.end;
                dFim.setDate(dFim.getDate() - 1);

                if(info.event.extendedProps.description == "publicação"){

                    //carregando variaveis no modela
                    $('#visualizarPublicacao #titulo').text(info.event.title);
                    $('#visualizarPublicacao #dInicio').text(info.event.start.toLocaleDateString());
                    $('#visualizarPublicacao #dTermino').text(dFim.toLocaleDateString());
                    $('#visualizarPublicacao #url').text('Saiba mais');
                    $('#visualizarPublicacao #url').attr('href', info.event.url);


                    //abrir modal
                    $('#visualizarPublicacao').modal('show');
                }else{
                    //carregando variaveis no modela
                    $('#visualizarAgenda #titulo').text(info.event.title);
                    $('#visualizarAgenda #descricao').text(info.event.extendedProps.description);
                    $('#visualizarAgenda #dInicio').text(info.event.start.toLocaleDateString());
                    $('#visualizarAgenda #dTermino').text(dFim.toLocaleDateString());
                    
                    //abrir modal
                    $('#visualizarAgenda').modal('show');
                }
            }
        });
        //traduzir para o portugues
        calendar.setOption('locale', 'pt-br');
        calendar.render();
    });

    </script>
    <style>

        .calendario {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>

    <div id='calendar' class="calendario mt-5 mb-5"></div>

    <!-- modal Agenda-->
    <div class="modal fade" id="visualizarAgenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes do evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <dt class="col-sm-3">Título</dt>
                <dd class="col-sm-9" id="titulo"></dd>

                <dt class="col-sm-3">Descrição</dt>
                <dd class="col-sm-9" id="descricao"></dd>

                <dt class="col-sm-3">Data de inicio e fim</dt>
                <dd class="col-sm-9" id="dInicio"></dd>
                <dd class="col-sm-9" id="dTermino"></dd>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- modal publicação-->
    <div class="modal fade" id="visualizarPublicacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes do evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <dt class="col-sm-3">Título</dt>
                <dd class="col-sm-9" id="titulo"></dd>

                <dt class="col-sm-3">Data de inicio e fim</dt>
                <dd class="col-sm-9" id="dInicio"></dd>
                <dd class="col-sm-9" id="dTermino"></dd>
                
                <a class="col-sm-9" id="url" href="" target="_blank"></a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>
@endsection