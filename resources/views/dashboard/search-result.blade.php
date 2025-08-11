{{-- This is the content that will appear inside the modal --}}
<h5>Search results for: "{{ $query }}"</h5>

@if($researchResults->isEmpty() && $userResults->isEmpty())
  <p>No results found.</p>
@else
  @if(!$researchResults->isEmpty())
    <h6>Research Results</h6>
    <ul>
      @foreach($researchResults as $research)
        <li>{{ $research->title }} - {{ \Illuminate\Support\Str::limit($research->description, 50) }}</li>
      @endforeach
    </ul>
  @endif

  @if(!$userResults->isEmpty())
    <h6>User Results</h6>
    <ul>
      @foreach($userResults as $user)
        <li>{{ $user->name }} ({{ $user->email }})</li>
      @endforeach
    </ul>
  @endif
@endif
