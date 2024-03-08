<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <style>
        .content {
            width: 912px;
            font-size: 12px;
        }

        .border {
            border-color: rgb(0, 0, 0);
            border-width: 2px;
            border-style: solid;
        }

        .pt4 {

            padding-top: 2px;
            padding-bottom: 2px;
        }

        .pt8 {

            padding-top: 6px;
            padding-bottom: 6px;
        }

        .pt12 {

            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>
</head>

<body class="content pt4">
    <div>
        <div style="text-align: center">
            <p>SURAT JAMINAN PELAYANAN RAWAT INAP</p>
            <p>RUMAH SAKIT ERNALDI BAHAR</p>
        </div>
        <div>
            <table style="width: 100%;">
                <tr>
                    <td class="pt4" style="width: 15%;">Penjamin</td>
                    <td class="pt4" style="width: 10%">:</td>
                    <td class="pt4" style="width: 30%">Umum</td>
                    <td class="pt4" style="width: 15%">No.Registrasi</td>
                    <td class="pt4" style="width: 10%">:</td>
                    <td class="pt4" style="width: 20%">008931</td>
                </tr>
                <tr style="margin-top: 24px;">
                    <td class="pt4"  style="width: 15%">No. SEP</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%">Umum</td>
                    <td class="pt4"  style="width: 15%">No.Rekam Medis</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%">{{ $rm }}</td>
                </tr>
                <tr style="margin-top: 64px;">
                    <td class="pt4"  style="width: 15%">No. Peserta</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%"></td>
                    <td class="pt4"  style="width: 15%">Nama Pasien</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%">RIKA OKTAVIANI</td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%">Tgl. Kunjungan</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%">30/11/2023</td>
                    <td class="pt4"  style="width: 15%">Jenis Kelamin</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%">Wanita</td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%">Layanan</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%">CEMPAKA KLS III</td>
                    <td class="pt4"  style="width: 15%">Tgl.Lahir</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%">22/10/1995</td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%">Catatan</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%"></td>
                    <td class="pt4"  style="width: 15%">Status</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%">Kawin</td>
                </tr>
                <tr >
                    <td class="pt8"  style="width: 15%"></td>
                    <td class="pt8"  style="width: 10%"></td>
                    <td style="padding-left: 36px;"" class="pt8"  style="width: 30%;">Pasien</td>
                    <td class="pt8"  style="width: 15%"></td>
                    <td class="pt8"  style="width: 10%"></td>
                    <td style="padding-left: 36px;" class="pt8"  style="width: 20%;">Petugas</td>
                </tr>
                <tr >
                    <td class="pt12"  style="width: 15%"></td>
                    <td class="pt12"  style="width: 10%"></td>
                    <td class="pt12"  style="width: 30%;">__________________</td>
                    <td class="pt12"  style="width: 15%"></td>
                    <td class="pt12"  style="width: 10%"></td>
                    <td class="pt12"  style="width: 20%;">AYEN KUSTOYO</td>
                </tr>
                <tr >
                    <td style="width: 15%">Lembar Resep :</td>
                    <td style="width: 10%"></td>
                    <td style="width: 30%;text-align: center;"></td>
                    <td style="width: 15%"></td>
                    <td style="width: 10%"></td>
                    <td style="width: 25%;text-align: center;"></td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%">No. Rekam Medis</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%;">08-99-88</td>
                    <td class="pt4"  style="width: 15%">Nama Pasien</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%;">RIKA OKTAVIANI</td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%">Tgl. Lahir</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%;">22/10/1995</td>
                    <td class="pt4"  style="width: 15%">Berat Badan</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%;"></td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%">Alamat</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%;">JL.PERINTIS 39/8 SUKAMORO KM 18</td>
                    <td class="pt4"  style="width: 15%">No. Telp/HP</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%;">085379448845</td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%">Riwayat Alergi Obat</td>
                    <td class="pt4"  style="width: 10%"></td>
                    <td class="pt4"  style="width: 30%;"></td>
                    <td class="pt4"  style="width: 15%">Diagnosa Primer</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%;"></td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%">Catatan</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 30%;">1. Tidak</td>
                    <td class="pt4"  style="width: 15%">Diagnosa Sekunder</td>
                    <td class="pt4"  style="width: 10%">:</td>
                    <td class="pt4"  style="width: 20%;"></td>
                </tr>
                <tr >
                    <td class="pt4"  style="width: 15%"></td>
                    <td class="pt4"  style="width: 10%"></td>
                    <td class="pt4"  style="width: 30%;">2. Ya(Sebutkan : .....................</td>
                    <td class="pt4"  style="width: 15%"></td>
                    <td class="pt4"  style="width: 10%"></td>
                    <td class="pt4"  style="width: 20%;"></td>
                </tr>
                <tr >
                    <td class="pt4" colspan="2">
                    </td>
                    <td class="pt4" colspan="4" style="padding-left: 170px; padding-right: 63px;">
                        <table style="width: 100%;border: 1px solid black;border-collapse: collapse;">
                            <tr>
                                <td style="text-align: center;border: 1px solid black;" colspan="3">Telaah Resep</td>
                                <td style="text-align: center;border: 1px solid black;" colspan="3">Verifikasi Obat</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >Resep lengkap/jelas</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Tidak</td>
                                <td style="padding-left: 8px;width: 25%;border: 1px solid black;" >Tepat Obat</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Tidak</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >Tepat Obat</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Tidak</td>
                                <td style="padding-left: 8px;width: 25%;border: 1px solid black;" >Tepat Dosis</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Tidak</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >Tepat Dosis</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Tidak</td>
                                <td style="padding-left: 8px;width: 25%;border: 1px solid black;" >Tepat Waktu</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Tidak</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >Tepat Rute</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Tidak</td>
                                <td style="padding-left: 8px;width: 25%;border: 1px solid black;" >Tepat Pasien</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Tidak</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >Tepat Waktu</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Tidak</td>
                                <td style="padding-left: 8px;width: 25%;border: 1px solid black;" >Tepat Rute</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" >Tidak</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >Duplikasi</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Tidak</td>
                                <td style="padding-left: 8px;width: 25%;border: 1px solid black;" ></td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" ></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >Interaksi</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Tidak</td>
                                <td style="padding-left: 8px;width: 25%;border: 1px solid black;" ></td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" ></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >Polifarmasi > 5 obat</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Ya</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" >Tidak</td>
                                <td style="padding-left: 8px;width: 25%;border: 1px solid black;" ></td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black;text-align: center;" ></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="height: 40px;vertical-align: text-top;padding-left: 8px;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;" >Tindak Lanjut</td>
                                <td colspan="3" style="height: 40px;vertical-align: text-top;padding-left: 8px;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;" >Tindak Lanjut</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="height: 40px;vertical-align: text-top;padding-left: 8px;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;" >Informasi edukasi yang diberikan <br> Beri tanda (V) pada KIE yang diberikan</td>
                                <td colspan="3" rowspan="3" style="height: 40px;vertical-align: text-top;padding-left: 8px;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;" >Metode KIE <br> Ket : Lingkari pada nomor <br> 1. Ceramah <br> 2. Leaflet <br> 3. Praktek Langsung</td>
                            </tr>
                            <tr>
                                <td style="height: 20px;vertical-align: text-top;padding-left: 8px;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;text-align: center;" >Pemberi KIE</td>
                                <td colspan="2" rowspan="2" style="height: 20px;text-align: center;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;" >TTK Apoteker</td>
                            </tr>
                            <tr>
                                <td style="height: 20px;vertical-align: text-top;padding-left: 8px;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;text-align: center;" >Jenis KIE</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >1.Nama Obat</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td colspan="3" style="text-align: center;width: 25%;border: 1px solid black;" >Pemberi KIE</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >2.Cara Pemberian</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td colspan="3" rowspan="4" style="padding-left: 8px;width: 25%;border: 1px solid black;" >TTD (Nama jelas) <br><br><br>   No.HP</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >3.Waktu Pemberian</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>

                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >4.Indikasi Obat</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>

                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >5.Kontra Indikasi</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>

                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >6.Efek Samping</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td colspan="3" style="width: 10%;border: 1px solid black;text-align: center;" >Penerima KIE</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >7.Interaksi Obat</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td colspan="3" rowspan="3" style="padding-left: 8px;width: 25%;border: 1px solid black;" >TTD (Nama jelas) <br><br><br>   No.HP</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >8.Alergi Obat</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>

                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 35% ;border: 1px solid black;" >9.Komplikasi Obat</td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>
                                <td style="width: 10%;border: 1px solid black; text-align: center;" ></td>

                            </tr>
                        </table>
                    </td>
                </tr>
                <tr >
                    <td class="pt4" colspan="2">
                        <table >
                            <tr>
                                <td colspan="2" style="padding-top: 36px;padding-left: 8px;width: 33%;">04/12/2023 10.28.57</td>
                                <td style="padding-top: 36px;text-align: right;padding-right: 8px;width: 33% ;">Dokter</td>
                            </tr>
                        </table>
                    </td>
                    <td class="pt4" colspan="4" style="padding-left: 170px; padding-right: 63px;">
                        <table style="width: 100%;border: 1px solid black;border-collapse: collapse;">
                            <tr>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;">T:</td>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;">A:</td>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;">S:</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;">I:</td>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;">K:</td>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;"></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;">E:</td>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;">R:</td>
                                <td style="padding-left: 8px;width: 33% ;border: 1px solid black;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
