<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Penyewaan Laboratorium</title>
    <style>
        /* Base Styles */
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
        }

        /* Email Container */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .email-header {
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }

        .email-logo {
            max-width: 120px;
            margin-bottom: 15px;
        }

        /* Content */
        .email-content {
            padding: 30px;
        }

        .section-title {
            color: #1e3a8a;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 8px;
        }

        /* Detail Table */
        .detail-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        .detail-table th {
            background-color: #f8fafc;
            color: #64748b;
            font-weight: 500;
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #e2e8f0;
        }

        .detail-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: top;
        }

        .detail-table tr:last-child td {
            border-bottom: none;
        }

        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        .badge-primary {
            background-color: #dbeafe;
            color: #1d4ed8;
        }

        /* Footer */
        .email-footer {
            background-color: #f1f5f9;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #64748b;
        }

        .footer-links {
            margin-top: 10px;
        }

        .footer-links a {
            color: #3b82f6;
            text-decoration: none;
            margin: 0 8px;
        }

        /* Responsive */
        @media screen and (max-width: 480px) {
            .email-header h1 {
                font-size: 20px;
            }

            .detail-table th,
            .detail-table td {
                padding: 8px 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>KONFIRMASI PENYEWAAN EXCLUSIVE ROOM</h1>
        </div>

        <div class="email-content">
            <p>Halo Tim Administrasi,</p>
            <p>Berikut detail permohonan penyewaan exclusive room yang baru saja diterima:</p>

            <h2 class="section-title">Informasi Pemohon</h2>
            <table class="detail-table">
                <!-- [Keep all your existing rows for user information] -->
            </table>

            <h2 class="section-title">Detail Institusi</h2>
            <table class="detail-table">
                <tr>
                    <th width="35%">Nama Institusi/Perusahaan</th>
                    <td>{{ $reservation['institution'] ?? 'N/A' }}</td>
                </tr>
            </table>

            <h2 class="section-title">Detail Penyewaan</h2>
            <table class="detail-table">
                <tr>
                    <th width="35%">Exclusive Room</th>
                    <td><strong>{{ $reservation['exc'] ?? 'N/A' }}</strong></td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>{{ \Carbon\Carbon::parse($reservation['date'])->isoFormat('dddd, D MMMM YYYY') ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Waktu</th>
                    <td>{{ $reservation['time'] ?? 'N/A' }}</td>
                </tr>
            </table>

            <p style="margin-top: 25px;">
                <strong>Lampiran:</strong> Surat Permohonan telah dilampirkan dalam email ini.<br>
                Silakan tinjau permohonan ini dan berikan konfirmasi melalui sistem atau hubungi pemohon jika diperlukan.
            </p>

            <div style="background-color: #f8fafc; border-left: 4px solid #2563eb; padding: 15px; margin-top: 25px;">
                <p style="margin: 0; color: #64748b;">
                    <strong>Catatan Sistem:</strong> Permohonan ini telah tercatat dalam sistem kami dengan ID:
                    <span style="color: #1e40af;">#{{ substr(md5(uniqid()), 0, 8) }}</span>
                </p>
            </div>
        </div>

        <div class="email-footer">
            <p>© {{ date('Y') }} Pusat Laboratorium Teknologi. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Website</a> |
                <a href="#">Kebijakan Privasi</a> |
                <a href="#">Syarat & Ketentuan</a>
            </div>
            <p style="margin-top: 10px;">
                Email ini dikirim secara otomatis. Mohon tidak membalas email ini.
            </p>
        </div>
    </div>
</body>
</html>
