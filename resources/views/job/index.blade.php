<x-layout>
    <x-breadcrumbs class="mb-4"
      :links="['Jobs' => route('jobs.index')]" />
<x-card class="mb-4 text-sm" x-data="">
    <form   x-ref="filters"    id="filtering-form" action="{{route('jobs.index')}}" method="GET">
<div class="mb-4 grid grid-cols-2 gap-4">
<div>
    <div class="mb-1 font-semibold">Search </div>
    <x-text-input name="search" value="" placeholder="Search for any text" form-ref="filters" />
</div>
<div class="mb-1 font-semibold">Salary
<div class="flex space-x-2">

    <x-text-input class name="min_salary" value="{{request('min_salary')}}" placeholder="From" form-ref="filters" />
    <x-text-input name="max_salary" value="{{request('max_salary')}}" placeholder="To"  form-ref="filters"/>
</div>
</div>
<div>
<div class="mb-1 font-semibold">Experience</div>
 <x-radio-group name="experience" :options="\App\Models\job::$experience" />
</div>

<div><div class="mb-1 font-semibold">Category</div>
<x-radio-group name="category" :options="\App\Models\job::$category" />
</div></div>
<button class=" w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Filter
</button>
</div>

</form>
</x-card>
    @foreach ($jobs as $job)
      <x-job-card class="mb-4" :$job>
        <div>
          <x-link-button :href="route('jobs.show', $job)">
            Show
          </x-link-button>
        </div>
      </x-job-card>
    @endforeach


</x-layout>
{{--

      <label for="experience" class="mb-1 flex items-center">
        <input type="radio" name="experience" value=""
        @checked(!request('experience'))/>
        <span class="ml-2">All</span>
      </label>
      <label for="experience" class="mb-1 flex items-center">
        <input type="radio" name="experience" value="entry"
        @checked('entry'===request('experience'))/>
        <span class="ml-2">Entry</span>
      </label>
      <label for="experience" class="mb-1 flex items-center">
        <input type="radio" name="experience" value="intermediate"
        @checked('intermediate'===request('experience'))/>
        <span class="ml-2">Intermediate</span>
      </label>
      <label for="experience" class="mb-1 flex items-center">
        <input type="radio" name="experience" value="senior"
        @checked('senior'===request('experience'))/>
        <span class="ml-2">Senior</span>
      </label> --}}
        {{-- <div class="pagination justify-content-center">
        {{ $jobs->links() }}
    </div> --}}
