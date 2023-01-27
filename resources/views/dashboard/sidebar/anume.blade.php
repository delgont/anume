<li class="nav-item sidebar-nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pages" aria-expanded="true" aria-controls="pages">
    <i class='bx bxl-html5 bx-sm sidebar-icon'></i>
    <span>Anume</span>
  </a>
  <div id="pages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="py-2 collapse-inner rounded">
      <a href="{{route('anume.dashboard.admissions')}}" class="collapse-item ml-lg-4">{{ __('Admissions Tool') }}</a>
      <a class="collapse-item ml-lg-4" href="{{ route('anume.dashboard.events') }}">{{ __('Manage Events') }}</a>
      <a class="collapse-item ml-lg-4" href="{{ route('anume.dashboard.settings') }}">{{ __('Anume Settings') }}</a>
    </div>
  </div>
</li>
