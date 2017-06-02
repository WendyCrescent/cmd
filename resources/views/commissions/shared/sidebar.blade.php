<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="text-center"> Commisssion Status</h4>
  </div>
  <div class="panel-body">
    @if(!empty($commissions))
      @foreach($commissions as $comm)
        {{ $comm->name }} - {{ $comm->status }}
        <div class="progress">
          <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="{{ $comm->completion }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $comm->completion }}%;">
            {{ $comm->completion }}%
          </div>
        </div>
      @endforeach
    @else
      <p class="text-center"> The Commission queue is empty! </p>
    @endif
  </div>
</div>
