@extends('mahasiswa.page.header')

@section('content')
    @vite(['resources/css/mobiscroll.jquery.min.css', 'resources/js/mobiscroll.jquery.min.js'])

    <script>
      window.isMbscDemo = true;
    </script>

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
      }

      body,
      html {
        height: 100%;
      }
    </style>
    <div class="w-screen h-full mt-12 px-2 py-2">
      <div mbsc-page class="demo-responsive-month-view">
        <div style="height: 100%">
          <div id="demo-responsive-month-view"></div>
        </div>
      </div>
    </div>

    <script>
      
      $(document).ready(function() {
        mobiscroll.setOptions({
          locale: mobiscroll.localeEn, // Specify language like: locale: mobiscroll.localePl or omit setting to use default
          theme: "ios", // Specify theme like: theme: 'ios' or omit setting to use default
          themeVariant: "light", // More info about themeVariant: https://mobiscroll.com/docs/jquery/eventcalendar/api#opt-themeVariant
        });

        var inst = $("#demo-responsive-month-view")
          .mobiscroll()
          .eventcalendar({
            responsive: {
              xsmall: {
                view: {
                  calendar: { type: "week" },
                  agenda: { type: "day" },
                },
              },
              custom: {
                breakpoint: 600,
                view: {
                  calendar: { labels: true },
                },
              },
            },
          })
          .mobiscroll("getInst");

        $.getJSON("https://trial.mobiscroll.com/events/?vers=5&callback=?", function (events) {
          inst.setEvents(events);
        }, "jsonp");
      });
    </script>
@endsection
