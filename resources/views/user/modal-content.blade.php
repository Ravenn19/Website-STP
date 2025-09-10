<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* CSS untuk Print */
        @media print {
            body * {
                visibility: hidden;
            }
            .blog-modal-container,
            .blog-modal-container * {
                visibility: visible;
            }
            .blog-modal-container {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
            }

            /* Sembunyikan elemen tidak perlu */
            .blog-footer,
            .btn-print,
            .social-share {
                display: none !important;
            }

            /* Optimalkan konten */
            .blog-content {
                font-size: 12pt;
                line-height: 1.5;
                color: #000 !important;
            }

            /* Gambar */
            .featured-image {
                max-height: 300px !important;
                page-break-inside: avoid;
            }

            /* Header */
            .blog-header {
                background: white !important;
                color: black !important;
                border-bottom: 2px solid #000;
            }

            /* Atur page break */
            .blog-content {
                page-break-after: avoid;
                page-break-inside: avoid;
            }

            /* Tambahkan margin untuk printer */
            @page {
                size: auto;
                margin: 15mm 10mm;
            }
        }

        /* Basic Styling - Tidak mengubah sistem upload */
        .blog-modal-container {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #333;
        }

        .blog-header {
            background-color: #f8f9fa;
        }

        .blog-content {
            line-height: 1.8;
            font-size: 1.05rem;
        }

        .blog-content p {
            margin-bottom: 1.5rem;
        }

        /* Style untuk gambar di konten - TIDAK mengubah gambar utama */
        .blog-content img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            margin: 1rem 0;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .blog-content {
                font-size: 1rem;
                padding: 1rem;
            }
        }
    </style>

</head>
<body>
    <div class="blog-modal-container bg-white rounded-lg overflow-hidden border">
        <!-- Header Section -->
        <div class="blog-header p-4 border-bottom">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0 text-dark font-weight-bold">{{ $blog->title }}</h3>
                <div class="text-muted small">
                    <i class="far fa-calendar-alt mr-1"></i>
                    {{ $blog->created_at->format('d M Y') }}
                </div>
            </div>
            <div class="author-info mt-2">
                <small class="text-muted">
                    <i class="far fa-user mr-1"></i>
                    Oleh: {{ $blog->user->name }}
                </small>
            </div>
        </div>

        <!-- Image Section - TIDAK DIUBAH dari sistem yang sudah ada -->
        @if($blog->image_path)
        <div class="blog-image-container p-3">
            <img src="{{ asset('storage/' . $blog->image_path) }}"
                class="img-fluid rounded"
                alt="{{ $blog->title }}"
                style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
        </div>
        @endif

        <!-- Content Section -->
        <div class="blog-content p-4">
            <div class="content-text">
                {!! $blog->content !!}
            </div>
        </div>

        <!-- Footer Section -->
        <div class="blog-footer p-3 bg-light border-top">
            <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-outline-primary btn-print" onclick="printBlogModal()">
                    <i class="fas fa-print mr-1"></i> Cetak
                </button>
            </div>
        </div>
    </div>

    <script>
        function printBlogModal() {
            // Clone modal content
            const printContent = document.querySelector('.blog-modal-container').cloneNode(true);

            // Remove unnecessary elements
            const elementsToRemove = printContent.querySelectorAll('.blog-footer, .btn-print, .social-share');
            elementsToRemove.forEach(el => el.remove());

            // Create print window
            const printWindow = window.open('', '', 'width=800,height=600');
            printWindow.document.write(`
                <!DOCTYPE html>
                <html>
                <head>
                    <title>Print Blog</title>
                    <style>
                        body { font-family: Arial; margin: 0; padding: 0; }
                        img { max-width: 100%; height: auto; }
                        .blog-header { border-bottom: 2px solid #000; margin-bottom: 15px; }
                        @page { size: auto; margin: 10mm; }
                    </style>
                </head>
                <body>
                    ${printContent.innerHTML}
                    <script>
                        window.onload = function() {
                            window.print();
                            setTimeout(function() {
                                window.close();
                            }, 1000);
                        };
                    <\/script>
                </body>
                </html>
            `);
            printWindow.document.close();
        }
    </script>

</body>



</html>
