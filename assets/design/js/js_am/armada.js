$(document).ready(function(){
    var table_armada_global = $('#table-armada-global').DataTable();
    var table_armada_kota = $('#table-armada-kota').DataTable();
    select();

    //==================================================Data Armada==================================================
    if ( $( "#data-armada" ).length ) {
        data_armada_global();
    }
    $('#id-tab-cabang').click(function(){
        list_all_cabang();
    });
    $('#btn-lihat').click(function(){
        list_armada_kota();
    });
    $('#id-tab-detail').click(function(){
        list_kota('#select-detail-kota');
    });
    $('#select-detail-kota').change(function(){
        clear_armada_detail();
        list_cabang('#select-detail-kota','#select-detail-cabang');
    });
    $('#select-detail-cabang').change(function(){
        clear_armada_detail();
        list_nopol('#select-detail-cabang','#select-detail-nopol');
    });
    $('#select-detail-nopol').change(function(){
        data_armada_detail();
    });
    
    //==================================================Input Armada==================================================
    if ( $( "#input-armada" ).length ) {
        list_kota('#kota');
        list_leasing();
        list_pemilik();
        list_merk();
        list_warna();
    }
    $('#kota').change(function(){
        list_cabang('#kota','#cabang');
    });
    $('#merk').change(function(){
        list_type();
    });
    $('#tgl_pajak,#tgl_perpanjang,#tgl_kir').datepicker({
        dateFormat:'dd-mm-yy',
        changeMonth: true,
        changeYear: true
    });
    
    $('#btn-input').click(function(){
        input();
    });
    $('#btn-clear').click(function(){
        reload_input();
        /*var kota            = $('#kota').val();
        var cabang          = $('#cabang').val();
        var pemilik         = $('#pemilik').val();
        var nopol           = $('#nopol').val();
        var kendaraan       = $('#type').val();
        var tgl_pajak       = date($('#tgl_pajak').val());
        var tgl_perpanjang  = date($('#tgl_perpanjang').val());
        var tgl_kir         = date($('#tgl_kir').val());
        var no_mesin        = $('#no_mesin').val();
        var no_rangka       = $('#no_rangka').val();
        var warna           = $('#warna').val();
        var tahun           = $('#thn_produksi').val();
        var leasing         = $('#leasing').val();
        var ang_selesai     = $('#ang_selesai').val();
        var total_ang       = $('#total_ang').val();

        if (tgl_pajak == 'NaN-NaN-NaN') {
            tgl_pajak = '';
        }
        if (tgl_perpanjang == 'NaN-NaN-NaN') {
            tgl_perpanjang = '';
        }
        if (tgl_kir == 'NaN-NaN-NaN') {
            tgl_kir = '';
        }
        if (warna == 'Pilih Warna') {
            warna = null;
        }
        if (tahun == 'Pilih Tahun') {
            tahun = null;
        }
        if (leasing == 'Pilih Leasing') {
            leasing = null;
        }

        console.log(kota);
        console.log(cabang);
        console.log(pemilik);
        console.log(nopol);
        console.log(kendaraan);
        console.log(tgl_pajak);
        console.log(tgl_perpanjang);
        console.log(tgl_kir);
        console.log(no_mesin);
        console.log(no_rangka);
        console.log(warna);
        console.log(tahun);
        console.log(leasing);
        console.log(ang_selesai);
        console.log(total_ang);*/
    });

    //==================================================Pindah Armada==================================================
    if ( $( "#pindah-armada" ).length ) {
        list_kota('#kota-asal');
        list_kota('#kota-pindah');
    }
    $('#kota-asal').change(function(){
        list_cabang('#kota-asal','#cabang-asal');
    });
    $('#kota-pindah').change(function(){
        list_cabang('#kota-pindah','#cabang-pindah');
    });
    $('#cabang-asal').change(function(){
        list_nopol('#cabang-asal','#nopol-armada');
    });
    $('#btn-pindah').click(function(){
        pindah();
    });
    $('#btn-clear-pindah').click(function(){
        reload_pindah();
    });

});

//==================================================Function==================================================
function select(){
    $('.select-kota').html('<option>Pilih Kota</option>');
    $(".select-cabang").html('<option>Pilih Cabang</option>');
    $(".select-nopol").html('<option>Pilih No Polisi</option>');
    $("#pemilik").html('<option>Pilih Pemilik</option>');
    $("#merk").html('<option>Pilih Merk</option>');
    $("#type").html('<option>Pilih Type</option>');
    $("#warna").html('<option>Pilih Warna</option>');
    $("#leasing").html('<option>Pilih Leasing</option>');
    $("#nopol-armada").html('<option>Pilih No Polisi</option>');
};//tutup function select()

function list_all_cabang(){
    var option = "";

    $.ajax({
        url: "Armada/list_kota",
        type: 'GET',
        dataType: 'json',

        success: function(response){ 
            console.log(response);

            $('#kota-armada').html('<option>Error</option>'+option);

            $.each(response, function(index){
                var kode_kota = response[index]['kode_kota'];
                var nama_kota= response[index]['nama_kota'];
                option += "<option value = '"+kode_kota+"'>"+nama_kota+" </option>";
            });

            $('#kota-armada').html('<option>Pilih Kota</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_all_cabang()

function data_armada_global(){
    var table_armada_global = $('#table-armada-global').DataTable();

    $.ajax({
        url: "Armada/list_armada_global",
        type: 'GET',
        dataType: 'json',

        success: function(response){
            table_armada_global.clear().draw();
            $.each(response, function(index){
                var kota = response[index]['nama_kota'];
                var cabang = response[index]['nama_cabang'];
                var nopol = response[index]['no_polisi'];
                var merk = response[index]['merk_kendaraan'];
                var type = response[index]['type_kendaraan'];
                var warna = response[index]['warna'];
                
                table_armada_global.row.add([
                   kota,
                   cabang,
                   nopol,
                   merk,
                   type,
                   warna
                ]).draw(false);
            });
            
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function data_armada_global()

function data_armada_detail(){
    var nopol = $('#select-detail-nopol').val();

    $.ajax({
        url: "Armada/list_armada_detail",
        type: 'POST',
        dataType: 'json',
        data: {
            "no_polisi" : nopol
        },

        success: function(response){
            clear_armada_detail();
            $.each(response, function(index){
                var kota = response[index]['nama_kota'];
                var cabang = response[index]['nama_cabang'];
                var pemilik = response[index]['nama_pemilik'];
                var nopol = response[index]['no_polisi'];
                var merk = response[index]['merk_kendaraan'];
                var type = response[index]['type_kendaraan'];
                var tgl_pajak = response[index]['tgl_pajak'];
                var tgl_perpanjang = response[index]['tgl_perpanjang_stnk'];
                var tgl_kir = response[index]['tgl_kir'];
                var no_mesin = response[index]['no_mesin'];
                var no_rangka = response[index]['no_rangka'];
                var warna = response[index]['warna'];
                var thn_produksi = response[index]['thn_produksi'];
                var nama_leasing = response[index]['nama_leasing'];
                var ang_selesai = response[index]['ang_selesai'];
                var total_ang = response[index]['total_ang'];
                
                $('#detail-kota').val(kota);
                $('#detail-cabang').val(cabang);
                $('#detail-pemilik').val(pemilik);
                $('#detail-nopol').val(nopol);
                $('#detail-merk').val(merk);
                $('#detail-type').val(type);
                $('#detail-tgl-pajak').val(tgl_pajak);
                $('#detail-tgl-perpanjang').val(tgl_perpanjang);
                $('#detail-tgl-kir').val(tgl_kir);
                $('#detail-no-mesin').val(no_mesin);
                $('#detail-no-rangka').val(no_rangka);
                $('#detail-total-ang').val(warna);
                $('#detail-thn-produksi').val(thn_produksi);
                $('#detail-leasing').val(nama_leasing);
                $('#detail-ang-selesai').val(ang_selesai);
                $('#detail-total-ang').val(total_ang);
            });
            
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function data_armada_detail()

function list_armada_kota(){
    var kota = $('#kota-armada').val();
    var table_armada_kota = $('#table-armada-kota').DataTable();
    //console.log(cabang);

    $.ajax({
        url: "Armada/list_armada_kota",
        type: 'POST',
        dataType: 'json',
        data: {
            "kode_kota" : kota
        },

        success: function(response){ 
            console.log(response);
            if (response == 0){
                alert('Tidak ada Armada di Cabang, Silahkan pilih cabang lain.');
                table_armada_kota.clear().draw();
            }else{
                table_armada_kota.clear().draw();
                $.each(response, function(index){
                    var kota = response[index]['nama_kota'];
                    var cabang = response[index]['nama_cabang'];
                    var nopol = response[index]['no_polisi'];
                    var merk = response[index]['merk_kendaraan'];
                    var type = response[index]['type_kendaraan'];
                    var warna = response[index]['warna'];
                    
                    table_armada_kota.row.add([
                       kota,
                       cabang,
                       nopol,
                       merk,
                       type,
                       warna
                    ]).draw(false);
                });
            }
            
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_armada_kota()

function list_kota(id_kota){
    var option = "";

    $.ajax({
        url: "Controller_input_armada/list_kota",
        type: 'GET',
        dataType: 'json',

        success: function(response){ 
            console.log(response);

            $(id_kota).html('<option>Error</option>'+option);

            $.each(response, function(index){
                var kode_kota = response[index]['kode_kota'];
                var nama_kota = response[index]['nama_kota'];
                option += "<option value = '"+kode_kota+"'>"+nama_kota+" </option>";
            });

            $(id_kota).html('<option>Pilih Kota</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_kota()

function list_cabang(id_kota,id_cabang){
    var kota = $(id_kota).val();
    var option = "";

    $.ajax({
        url: "Controller_input_armada/list_cabang",
        type: 'POST',
        dataType: 'json',
        data: {
            "kode_kota" : kota
        },

        success: function(response){ 
            console.log(response);

            $(id_cabang).html('<option>Error</option>'+option);

            $.each(response, function(index){
                var kode_cabang = response[index]['kode_cabang'];
                var nama_cabang = response[index]['nama_cabang'];
                option += "<option value = '"+kode_cabang+"'>"+nama_cabang+" </option>";
            });

            $(id_cabang).html('<option>Pilih Cabang</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_cabang()

function list_nopol(id_cabang,nopol){
    var cabang = $(id_cabang).val();
    var option = "";

    $.ajax({
        url: "Controller_pindah_armada/list_nopol",
        type: 'POST',
        dataType: 'json',
        data: {
            "kode_cabang" : cabang
        },

        success: function(response){ 
            console.log(response);

            $(nopol).html('<option>Error</option>'+option);

            $.each(response, function(index){
                var no_polisi = response[index]['no_polisi'];
                option += "<option value = '"+no_polisi+"'>"+no_polisi+" </option>";
            });

            $(nopol).html('<option>Pilih No Polisi</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_nopol()

function list_pemilik(){
    var option = "";

    $.ajax({
        url: "Controller_input_armada/list_pemilik",
        type: 'GET',
        dataType: 'json',

        success: function(response){ 
            console.log(response);

            $('#pemilik').html('<option>Error</option>'+option);

            $.each(response, function(index){
                var kode_pemilik = response[index]['kode_pemilik'];
                var nama_pemilik = response[index]['nama_pemilik'];
                option += "<option value = '"+kode_pemilik+"'>"+nama_pemilik+" </option>";
            });

            $('#pemilik').html('<option>Pilih Pemilik</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_pemilik()

function list_merk(){
    var option = "";

    $.ajax({
        url: "Controller_input_armada/list_merk",
        type: 'GET',
        dataType: 'json',

        success: function(response){ 
            console.log(response);

            $('#merk').html('<option>Error</option>'+option);

            $.each(response, function(index){
                var merk_kendaraan = response[index]['merk_kendaraan'];
                option += "<option value = '"+merk_kendaraan+"'>"+merk_kendaraan+" </option>";
            });

            $('#merk').html('<option>Pilih Merk</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_kendaraan()

function list_type(){
    var merk = $('#merk').val();
    var option = "";

    $.ajax({
        url: "Controller_input_armada/list_type",
        type: 'POST',
        dataType: 'json',
        data: {
            "merk_kendaraan" : merk
        },

        success: function(response){ 
            console.log(response);

            $('#type').html('<option>Error</option>'+option);

            $.each(response, function(index){
                var kode_kendaraan = response[index]['kode_kendaraan'];
                var type_kendaraan = response[index]['type_kendaraan'];
                option += "<option value = '"+kode_kendaraan+"'>"+type_kendaraan+" </option>";
            });

            $('#type').html('<option>Pilih Type</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_type()

function list_warna(){
    var option = "";

    $.ajax({
        url: "Controller_input_armada/list_warna",
        type: 'GET',
        dataType: 'json',

        success: function(response){ 
            console.log(response);

            $('#warna').html('<option>Error</option>'+option);

            $.each(response, function(index){
                var kode_warna = response[index]['kode_warna'];
                var warna = response[index]['warna'];
                option += "<option value = '"+kode_warna+"'>"+warna+" </option>";
            });

            $('#warna').html('<option value="Pilih Warna">Pilih Warna</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_warna()

function list_leasing(){
    var option = "";

    $.ajax({
        url: "Controller_input_armada/list_leasing",
        type: 'GET',
        dataType: 'json',

        success: function(response){ 
            console.log(response);

            $('#leasing').html('<option>Erro</option>'+option);

            $.each(response, function(index){
                var kode_leasing = response[index]['kode_leasing'];
                var nama_leasing = response[index]['nama_leasing'];
                option += "<option value = '"+kode_leasing+"'>"+nama_leasing+" </option>";
            });

            $('#leasing').html('<option value="Pilih Leasing">Pilih Leasing</option>'+option);
        },
        error: function(response){
            console.log(response);
        }
    });
};//tutup function list_leasing()

function date(tanggal){
    var d = new Date(tanggal);
    var dd = d.getDate();
    var mm = d.getMonth()+1; //January is 0!
    var yyyy = d.getFullYear();
    if(dd<10){ dd='0'+dd; }
    if(mm<10){ mm='0'+mm; }
    var date = yyyy+'-'+dd+'-'+mm;
    return date;
};//tutup function date()

function input(){
    var kota            = $('#kota').val();
    var cabang          = $('#cabang').val();
    var pemilik         = $('#pemilik').val();
    var nopol           = $('#nopol').val();
    var kendaraan       = $('#type').val();
    var tgl_pajak       = date($('#tgl_pajak').val());
    var tgl_perpanjang  = date($('#tgl_perpanjang').val());
    var tgl_kir         = date($('#tgl_kir').val());
    var no_mesin        = $('#no_mesin').val();
    var no_rangka       = $('#no_rangka').val();
    var warna           = $('#warna').val();
    var tahun           = $('#thn_produksi').val();
    var leasing         = $('#leasing').val();
    var ang_selesai     = $('#ang_selesai').val();
    var total_ang       = $('#total_ang').val();
    
    if (warna == 'Pilih Warna') {
            warna = null;
    }
    if (tahun == 'Pilih Tahun') {
        tahun = null;
    }
    if (leasing == 'Pilih Leasing') {
        leasing = null;
    }

    if(confirm('Apakah anda yakin ingin menyimpan data ?') == true){
        $.ajax({
            url: 'Controller_input_armada/input_armada',
            type: 'POST',
            data: {
                kode_kota         : kota,
                kode_cabang       : cabang,
                kode_pemilik      : pemilik,
                kode_kendaraan    : kendaraan,
                no_polisi         : nopol,
                tgl_pajak         : tgl_pajak,
                tgl_perpanjang    : tgl_perpanjang,
                tgl_kir           : tgl_kir,
                no_mesin          : no_mesin,
                no_rangka         : no_rangka,
                kode_warna        : warna,
                thn_produksi      : tahun,
                kode_leasing      : leasing,
                ang_selesai       : ang_selesai,
                total_ang         : total_ang
            },

            success: function(response){
                if (response !== '1') {
                    alert('Gagal menyimpan data');
                    console.log(response);
                    //reload_input();
                }else{
                    alert('Data Berhasil disimpan');
                    console.log(response);
                    reload_input();
                }
            },
            error: function(response){
                console.log(response);
            }
        });
    };
};//tutup function insert()

function pindah(){
    var kota            = $('#kota-pindah').val();
    var cabang          = $('#cabang-pindah').val();
    var nopol           = $('#nopol-armada').val();

    if(confirm('Apakah anda yakin ingin pindah cabang ?') == true){
        $.ajax({
            url: 'Controller_pindah_armada/pindah_armada',
            type: 'POST',
            data: {
                kode_kota         : kota,
                kode_cabang       : cabang,
                no_polisi         : nopol
            },

            success: function(response){
                if (response == 1) {
                    alert('Data Berhasil disimpan');
                    console.log(response);
                    reload_pindah();
                }else{
                    alert('Gagal menyimpan data');
                    console.log(response);
                    reload_pindah();
                }
            },
            error: function(response){
                console.log(response);
            }
        });
    };
};//tutup function pindah()

function clear_armada_detail(){
    $('#detail-kota').val('');
    $('#detail-cabang').val('');
    $('#detail-pemilik').val('');
    $('#detail-nopol').val('');
    $('#detail-merk').val('');
    $('#detail-type').val('');
    $('#detail-tgl-pajak').val('');
    $('#detail-tgl-perpanjang').val('');
    $('#detail-tgl-kir').val('');
    $('#detail-no-mesin').val('');
    $('#detail-no-rangka').val('');
    $('#detail-total-ang').val('');
    $('#detail-thn-produksi').val('');
    $('#detail-leasing').val('');
    $('#detail-ang-selesai').val('');
    $('#detail-total-ang').val('');
};//tutu function clear_armada_detail()

function reload_input(){
    $('#kota').find('option').prop("selected",false);
    $('#cabang').find('option').prop("selected",false);
    $('#pemilik').find('option').prop("selected",false);
    $('#merk').find('option').prop("selected",false);
    $('#type').find('option').prop("selected",false);
    $('#warna').find('option').prop("selected",false);
    $('#leasing').find('option').prop("selected",false);
    $('#thn_produksi').find('option').prop("selected",false);
    $('#nopol').val('');
    $('#tgl_pajak').val('');
    $('#tgl_perpanjang').val('');
    $('#tgl_kir').val('');
    $('#no_mesin').val('');
    $('#no_rangka').val('');
    $('#ang_selesai').val('');
    $('#total_ang').val('');
};//tutup function reload()

function reload_pindah(){
    $('#kota-asal').find('option').prop("selected",false);
    $('#kota-pindah').find('option').prop("selected",false);
    $('#cabang-asal').find('option').prop("selected",false);
    $('#cabang-pindah').find('option').prop("selected",false);
    $('#nopol-armada').find('option').prop("selected",false);
;}