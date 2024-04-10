{{-- <div id="searchbar">
    <form class="d-flex" role="search">
        <input wire:model.live="searchTerm" type="text" class="form-control me-2" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach($outputs as $output)
            <div class="px-3 py-1 border-bottom">
                <div class="d-flex flex-column ml-3">
                    <span> {{$output->id}}</span>
                </div>
            </div>
            {{-- <li><a class="dropdown-item" href="{{ route('note.show', $output->id) }}">{{ $heading->heading }}</a></li> <!-- Modify route_name and $result attributes accordingly --> --}}
        {{-- @endforeach
    </ul>
</div> --}} 




<div id="search-bar">
    <form class="d-flex" role="search">
        <input wire:model.live="search" class="form-control me-2" type="search" placeholder="Search Heading" aria-label="Search">
    </form>
    <div class="dropdown-menu d-block py-0">
        @foreach ($outputs as $output)
        <div class="px-3 py-1 border-bottom">
            <div class="d-flex flex-column ml-3">
                <span style="cursor: pointer;" wire:click="redirectToNote({{ $output->id }})">{{ $output->heading }}</span> 
                {{-- <small>@email</small> --}}
            </div>
        </div> 
        @endforeach
        
    </div> 
</div>