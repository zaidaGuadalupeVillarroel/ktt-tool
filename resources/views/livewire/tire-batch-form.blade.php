<div class="py-12 ">
    <div class="mt-8 max-w-md">
    <div clas="grid grid-cols-1 gap-6">
    

    <form wire:submit.prevent="submit">
        <div class="px-4  py-3">
            <label class="block">
                <span class="text-gray-700"> {{ __('Identifier')}} </span>
                <input type="text" class="form-input mt-1 block " id="identifier" placeholder="Enter batch identifier" wire:model="identifier">
            </label>
        </div>

        <div class="px-4  py-3">
            <label class="block">
                <span class="text-gray-700"> {{ __('Batch Date')}} </span>
                <input type="date" class="form-input mt-1 block w-full"  id="batch_date" placeholder="Enter batch date">
            </label>
        </div>
    
    

        <div class="px-4 py-3">
            <label class="block">
                <span class="text-gray-700"> {{ __('Country')}} </span>
                <input type="text" class="form-input mt-1 block w-full"  id="country"  placeholder="Enter country">
            </label>
        </div>

        <div class="px-4 py-3">
            <label class="block">
                <span class="text-gray-700">{{ __('Percentage of rubber')}}</span>
                <input type="range" class="mt-1 block w-full" id="rubber_percentage">
            </label>
        </div>   
        <div class="px-4 py-3">
            <label class="block">
                <span class="text-gray-700">{{ __('Percentage of black carbon')}}</span>
                <input type="range" class="mt-1 block w-full" id="black_carbon_percentage">
            </label>
        </div>  
        <div class="px-4 py-3">
            <label class="block">
                <span class="text-gray-700">{{ __('Percentage of fibre')}}</span>
                <input type="range" class="mt-1 block w-full" id="fibre_percentage">
            </label>
        </div>  
        

        <div class="px-4 py-3">
            <label class="block">
                <span class="text-gray-700">Quality (range 0-99)</span>
                <input type="range" class="mt-1 block w-full" id="quality">
            </label>
        </div>   
    
        <div class="px-4 py-3">
            <button type="submit" class="btn btn-primary">{{ _('Get Estimation')}}</button>
            </div>
    </form>
    </div>
    </div>
</div>