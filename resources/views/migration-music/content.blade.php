
<div class="preloader-1">
  <div>Loading</div>
  <span class="line line-1"></span>
  <span class="line line-2"></span>
  <span class="line line-3"></span>
  <span class="line line-4"></span>
  <span class="line line-5"></span>
  <span class="line line-6"></span>
  <span class="line line-7"></span>
  <span class="line line-8"></span>
  <span class="line line-9"></span>
</div>

<div id="dashboard">
  <h1 id="country">
    The Sound of Forced Movement
  </h1>

  <p class="detail-text-left">More than 250,000 Syrians have lost their lives in four-and-a-half years of armed conflict, which began with anti-government
    protests before escalating into a full-scale civil war. More than 11 million others have been forced from their homes
    as forces loyal to President Bashar al-Assad and those opposed to his rule battle each other - as well as jihadist
    militants from so-called Islamic State. During this period a lot of Syrians have fled to the Netherlands. The lines
    show how many asylum request the Netherlands received during this period which is in turn translated into sound.
  </p>

  <hr class="text-divider" />

  <div id="legenda">
    <svg width="200" height="260">
      <g id="children">
        <circle id="children" class="depandants" r="16" cx="16" cy="20"></circle>
        <circle id="children" class="refugees" r="10" cx="16" cy="20"></circle>
        <text x="40" y="28">
          Children (0 - 18)
        </text>
      </g>

      <g id="men">
        <circle id="men" class="depandants" r="16" cx="16" cy="60"></circle>
        <circle id="men" class="refugees" r="10" cx="16" cy="60"></circle>
        <text x="40" y="68">
          Men (18 - 65)
        </text>
      </g>

      <g id="women">
        <circle id="women" class="depandants" r="16" cx="16" cy="100"></circle>
        <circle id="women" class="refugees" r="10" cx="16" cy="100"></circle>
        <text x="40" y="108">
          Women (18 - 65)
        </text>
      </g>

      <g id="elderly">
        <circle id="elderly" class="depandants" r="16" cx="16" cy="140"></circle>
        <circle id="elderly" class="refugees" r="10" cx="16" cy="140"></circle>
        <text x="40" y="148">
          Elderly (65+)
        </text>
      </g>

      <g id="refugees">
        <circle id="light" class="depandants" r="16" cx="16" cy="200"></circle>
        <circle id="light" class="refugees" r="10" cx="16" cy="200"></circle>
        <text x="40" y="208">
          Refugees
        </text>
      </g>

      <g id="depandants">
        <circle id="light" class="depandants" r="15" cx="16" cy="240"></circle>
        <circle id="light" class="refugees" r="10" cx="16" cy="240"></circle>
        <text x="40" y="248">
          Depandants
        </text>
      </g>
    </svg>
  </div>

  <div id="controls">
    <div id="play">
      <span class="icon">
        <i class="material-icons">pause</i>
      </span>
      <span class="label">Pause</span>
    </div>

    <div id="reload">
      <span class="icon">
        <i class="material-icons">refresh</i>
      </span>
      <span class="label">Reload</span>
    </div>
  </div>
</div>

<div id="events">

</div>

<div id="creators">
  Made by:
  <br/> Maarten van Veldhoven
  <br/> &#38;
  <br/> Sander Grandia
</div>

<div id="graph"></div>
<div id="graph-overlay"></div>

<audio id="dikke-bmw" src="{{ asset('migration-music/sound/dikke-bmw.mp3') }}"></audio>

<!-- SCRIPTS -->

<script type="text/javascript" src="{{ asset('migration-music/js/data-collector.js') }}"></script>
<script type="text/javascript" src="{{ asset('migration-music/js/midi-helper.js') }}"></script>
<script type="text/javascript" src="{{ asset('migration-music/js/controls-helper.js') }}"></script>
<script type="text/javascript" src="{{ asset('migration-music/js/interaction-helper.js') }}"></script>
<script type="text/javascript" src="{{ asset('migration-music/js/event-helper.js') }}"></script>
<script type="text/javascript" src="{{ asset('migration-music/js/migration-music.js') }}"></script>

<!-- CLASSES -->
<script type="text/javascript" src="{{ asset('migration-music/js/value-line/men-value-line.js') }}"></script>
<script type="text/javascript" src="{{ asset('migration-music/js/value-line/women-value-line.js') }}"></script>
<script type="text/javascript" src="{{ asset('migration-music/js/value-line/children-value-line.js') }}"></script>
<script type="text/javascript" src="{{ asset('migration-music/js/value-line/elderly-value-line.js') }}"></script>

<script>
  var refugees;

  // Adding map function to Javascript
  Number.prototype.map = function (in_min, in_max, out_min, out_max) {
      return (this - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
  }

  window.addEventListener('DOMContentLoaded', () => {
    initMidi(() => initData(() => start(refugees)));
  });
</script>
