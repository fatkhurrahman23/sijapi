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
          locale: mobiscroll.localeEn,
          theme: "ios",
          themeVariant: "light",
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
      });
    </script>

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@mobiscroll/eventcalendar/dist/js/mobiscroll.jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@mobiscroll/eventcalendar/dist/css/mobiscroll.jquery.min.css" rel="stylesheet">

    <script>
      $(document).ready(function() {
        // Mengambil data JSON dari file data.json
        $.getJSON('data.json', function(data) {
          // Menginisialisasi EventCalendar
          $('#demo-responsive-month-view').eventCalendar({
            jsonData: data,
            jsonDateFormat: 'human',
          });
        });
      });
    </script>
@endsection
