<section class="Section-1 text-lg-start py-8">
    <div class="container mx-auto py-5 lg:px-0 px-5">
        <div class="space-y-5 text-center">
            <h2 class="text-4xl font-semibold mb-5">
                When Assignments Pile Up, <span class="span-header">Our Experts Clear the Way
                </span>
                </h3>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-y-6 gap-x-2">
            <div class="">
                <label for="Paper Type">Paper Type</label>
                <select name="paper_type" class="form-select" aria-label="Paper Type">
                    <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                    @foreach ($paper_types as $paper_type)
                        <option class="text-sm" value="{{ $paper_type->id }}">{{ $paper_type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Academic Level</label>
                <select name="academic_level_id" id="academic_level" class="form-select get-fare" aria-label="Academic Level">
                    <option hidden="" value="0" disabled="" selected="">Academic Level</option>
                    @foreach ($academic_levels as $academic_level)
                        <option class="text-sm" value="{{ $academic_level->id }}">
                            {{ $academic_level->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Deadline</label>
                <select id="deadline" name="deadlines" class="form-select get-fare" aria-label="Deadlines">
                    <option hidden="" value="0" disabled="" selected="">Deadline</option>
                    @foreach ($deadlines as $deadline)
                        <option class="text-sm" value="{{ $deadline->id }}">{{ $deadline->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>No of Pages</label>
                <select name="Pages" id="no_of_pages" class="form-select get-fare" aria-label="No of Pages">
                    <option hidden="" value="0" disabled="" selected="">No of Pages</option>
                    @for ($i = 1; $i <= 200; $i++)
                        <option value="{{ $i }}" class="text-sm">
                            {{ 250 * $i . ' ' . 'Words' . ' ' . '-' . ' ' . $i . ' ' . 'Pages' }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class=" hide-on-mobile">
                <div class="flex items-center gap-2 shadow rounded px-2 py-1 border" >
                    <img src="{{ asset('img/chatgpticon.svg') }}" alt="chatgpt" width="35" height="35">
                    <div class="text-sm text-left" bis_skin_checked="1">
                        <p class="font-bold">No Chat GPT used</p>
                        <p>Only Human-writer content</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <a href="{{ route('order') }}" class="w-full order-link">Order Now</a>
            </div>
            <div class="flex lg:flex-col lg:justify-end text-center font-semibold px-4">
                <div class="text-dark">Total Price :</div>
                <div class="justify-center flex text-dark ">£ 
                    <div class="ml-2 text-primary" id="cost">0</div>
                </div>
            </div>
            <div class="hide-on-mobile">
                <div class="bg-white shadow rounded py-1 border">
                    <img class="mx-auto" src="{{ asset('img/turtining.webp') }}" alt="turnitin" width="150" height="42" >
                </div>
            </div>
        </div>
    </div>
</section>