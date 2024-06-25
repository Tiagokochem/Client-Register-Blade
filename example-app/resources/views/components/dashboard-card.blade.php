<div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
    <div class="px-5 py-3 bg-{{ $color ?? 'gray' }}-100">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <svg class="w-5 h-5 text-{{ $color ?? 'gray' }}-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="flex-1 w-0 ml-5">
                <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate">{{ $client['name'] }}</dt>
                    <dd class="mt-1 text-lg font-medium text-gray-900">{{ $client['detail']}}</dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="px-5 py-4 border-t border-gray-200">
        <div class="flex justify-end">
            <a href="{{ route('clients.show', $client['id']) }}" class="px-4 py-2 mr-2 text-white bg-blue-500 rounded-md hover:bg-blue-700">Ver o cadastro</a>
        </div>
    </div>
</div>
