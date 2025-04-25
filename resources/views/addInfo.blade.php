<x-navbar>
    <div class="text-center mt-12 mb-6">
        <h1 class="text-4xl font-bold">Tambah Berita</h1>
        <hr class="line">
    </div>
    <form method="POST" action="{{ route('addInfo') }}" enctype="multipart/form-data" class="form-layout">
        @csrf
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" required class="block font-semibold mb-1"
            value="{{ old('title') }}">

        <label for="content" class="block font-semibold mb-1">Isi:</label>
        <textarea rows="5" id="content" name="content" class="w-full p-2 bg-blue-100 border rounded">{{ old('content') }}</textarea>

        <button type="submit" class="login">Simpan</button>
    </form>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                extraPlugins: [ MyCustomUploadAdapterPlugin ]
            })
            .catch(error => {
                console.error(error);
            });
    
        function MyCustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }
    
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }
    
            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        const formData = new FormData();
                        formData.append('upload', file);
                        formData.append('_token', '{{ csrf_token() }}');
    
                        fetch('{{ route('upload.image') }}', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(result => {
                            resolve({
                                default: result.url
                            });
                        })
                        .catch(error => {
                            reject('Upload failed');
                            console.error(error);
                        });
                    }));
            }
    
            abort() {
                // Optional
            }
        }
    </script>
</x-navbar>
