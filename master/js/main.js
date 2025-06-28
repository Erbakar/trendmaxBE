/* Popup Pencere */
function Popup(fTitle, fMessage) {
    $("body").prepend('<div id="PopupDiv" class="pop1"><div class="pop2"><div class="pop3"><strong>' + fTitle + '</strong></div><div class="pop4">' + fMessage + '</div><div class="closex"><a href="javascript:;" onclick="PopupClose();" style="display: inline-block;">KAPAT</a></div></div></div>');
}
function PopupClose() {
    $("#PopupDiv").remove();
}
/* Popup Pencere */

/* Sadece Rakam */
function isNumberMoney(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 8 && charCode != 0 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 43 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function isNumberKeyNokta(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function isNumberKeyVirgul(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 44 && charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function karakterfiltrevirgul(deger) {
    var yaz = new String();
    var numaralar = "0123456789,";
    var chars = deger.value.split("");
    for (i = 0; i < chars.length; i++) {
        if (numaralar.indexOf(chars[i]) != -1) yaz += chars[i];
    }
    if (deger.value != yaz) deger.value = yaz;
}

function karakterfiltre(deger) {
    var yaz = new String();
    var numaralar = "0123456789.";
    var chars = deger.value.split("");
    for (i = 0; i < chars.length; i++) {
        if (numaralar.indexOf(chars[i]) != -1) yaz += chars[i];
    }
    if (deger.value != yaz) deger.value = yaz;
}
// Sadede Rakam //

/* Email Kontrol */
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email)) {
        return false;
    } else {
        return true;
    }
};
/* Email Kontrol */

// Tümünü Seç //
$('#select-all').click(function (event) {
    if (this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function () {
            this.checked = true;
            $(".div-block-44-beyaz").css({ background: "#e8eff8" });
            $(".div-block-44-gri").css({ background: "#e8eff8" });

        });
    } else {
        $(':checkbox').each(function () {
            this.checked = false;
            $(".div-block-44-beyaz").css({ background: "none" });
            $(".div-block-44-gri").css({ background: "#f1f1f1" });

        });
    }
});
// Tümünü Seç //


function UyeOl() {

    var fldAd = $('#fldAd');
    var fldSoyad = $('#fldSoyad');
    var fldEmail = $('#fldEmail');
    var fldPassword = $('#fldPassword');
    var fldCep = $('#fldCep');

    if (fldAd.val() == "") { $('#fldAdE').html('<div class="formmesaj">Lütfen adýnýzý yazýn.</div>'); return false; }
    if (fldSoyad.val() == "") { $('#fldSoyadE').html('<div class="formmesaj">Lütfen soyadýnýzý yazýn.</div>'); return false; }
    if (fldEmail.val() == "") { $('#fldEmailE').html('<div class="formmesaj">Lütfen e-posta adresi yazýn.</div>'); return false; }
    if (IsEmail(fldEmail.val()) == false) { $('#fldEmailE').html('<div class="formmesaj">Lütfen E-mail Adresinizi Geçerli Formatta Giriniz.</div>'); return false; }
    if (fldPassword.val() == "") { $('#fldPasswordE').html('<div class="formmesaj">Lütfen þifre yazýn.</div>'); return false; }
    if (fldCep.val() == "") { $('#fldCepE').html('<div class="formmesaj">Lütfen cep telefonu numaranýzý yazýn.</div>'); return false; }
}

$(function () {
    $("#q").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "/hizliarama/",
                data: 'term=' + escape(request.term),
                success: function (data) {
                    $('.HizliAramaSonuc').html(data);
                }
            });
        },
        minLength: 3,
        autoFocus: true,
        scroll: true,
        selectFirst: true,
    });
});

function MesajAdetListesi() {

    $.post("/mesaj-adet/", function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#MesajAdetListesi').html(data);
        };
    });

}
function HeaderSepetAdet() {

    $.post("/sepet-adet/", function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#SepetAdetListesi').html(data);
        };
    });

}

function HeaderSepetListele() {

    $.post("/sepet-listesi/", function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else { 
            $('#HeaderSepet').html(data);
        };
    });

}

function SepetGuncelListesi() {

    $.post("/sepet-listesi2/", function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#SepetGuncelListesiGoster').html(data);
        };
    });

}

function IptalEtSiparis(IptalId) {

    $.post("/siparis-iptaletme/?IptalId=" + IptalId, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Ýptal Etmeye Çalýþýyorsunuz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Sipariþinizi sadece Hazýrlanýyor durumunda iptal edebilirsiniz");
        }
        else {

            window.location.reload(true);
        };
    });

}
function SepetSil(SepetID) {

    $.post("/sepet-sil/?SepetID=" + SepetID, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else {
            HeaderSepetListele();
            HeaderSepetAdet();
            MesajAdetListesi();
            SepetGuncelListesi();
            $("#HeaderSepet").css({ display: "block" });
            $('html').click(function () {
                $("#HeaderSepet").css({ 'display': '' });

            });
        };
    });

}

function SepetSilX(SepetID)
{

		$.post("/sepet-sil/?SepetID=" + SepetID, function (data)
        {

			if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
			}

			else if (data == "ER1")  {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
			}

			else if (data == "ER2") {
				
                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
			}

			else {
                HeaderSepetListele();
                HeaderSepetAdet();
                MesajAdetListesi();
                SepetGuncelListesi();
			};
		});

}


function SepetAdetGuncelle(xSSepetID, zSSTur) {

    $.post("/sepetim-adetguncelle/?xSSepetID=" + xSSepetID + "&zSSTur=" + zSSTur, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Size Ait Olmayan Bir Sepeti Güncelleyemezsiniz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }
        else if (data == "OK") {
            HeaderSepetListele();
            HeaderSepetAdet();
            MesajAdetListesi();
            SepetGuncelListesi();    
        }
        else {
            Popup("Arayanbuldu", data);
        };
    });

}


function MesajOkuma(MesajID) {

    $.post("/mesaj-okundu/?MesajID=" + MesajID, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else {

        };
    });

}

function KomisyonHesapla() {

    var VarSatis1 = $('#VarSatis1').val() + "." + $('#VarSatis2').val();
    var UrunSatisKomisyon = $('#UrunSatisKomisyon').val();
    var VarIndirim = $('#VarIndirim').val();

    if (VarSatis1 == "") {  return false; }
    if (UrunSatisKomisyon == "") { return false; }
    if (VarIndirim == "") { return false; }

    $.post("/magaza-kazanchesapla/?SatisFiyati=" + VarSatis1 + "&UrunSatisKomisyon=" + UrunSatisKomisyon + "&VarIndirim=" + VarIndirim, function (data) {
        if (data == "ER0") {

        }

        else {
            $('#MagazaIndirimYuzdesiYansit').html(data);
        };
    });

}

function KomisyonHesapla2() {

    var VarSatis1 = $('#AltKategoriSatis1').val() + "." + $('#AltKategoriSatis2').val();
    var UrunSatisKomisyon = $('#CiftUrunSatisKomisyon').val();
    var VarIndirim = $('#AltKategoriIndirim').val();

    if (VarSatis1 == "") { return false; }
    if (UrunSatisKomisyon == "") { return false; }
    if (VarIndirim == "") { return false; }

    $.post("/magaza-kazanchesapla/?SatisFiyati=" + VarSatis1 + "&UrunSatisKomisyon=" + UrunSatisKomisyon + "&VarIndirim=" + VarIndirim, function (data) {
        if (data == "ER0") {

        }

        else {
            $('#MagazaIndirimYuzdesiYansit2').html(data);
        };
    });

}


function KomisyonHesapla3() {

    var VarSatis1 = $('#IndSatis').val();
    var UrunSatisKomisyon = $('#IndSatisKomisyon').val();
    var VarIndirim = $('#indirimOran').val();

    if (VarSatis1 == "") { return false; }
    if (UrunSatisKomisyon == "") { return false; }
    if (VarIndirim == "") { return false; }

    $.post("/magaza-kazanchesapla/?SatisFiyati=" + VarSatis1 + "&UrunSatisKomisyon=" + UrunSatisKomisyon + "&VarIndirim=" + VarIndirim, function (data) {
        if (data == "ER0") {

        }

        else {

            $('#MagazaIndirimYuzdesiYansit3').html(data);
        };
    });

}


function VasitaIlce() {
    var SehirID = $("#SehirID");
    if (SehirID.val() == "") { return false; }


    $.post("/ilcelistesivasita/?SehirID=" + SehirID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#IlceID').empty();
            $('#VasitaIlceGetir').html(data);
        };
    });
}

function AdresDuzenlemeC(fldAdresID) {
    $.post("/sepet-adresduzenle/?fldAdresID=" + fldAdresID, function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#YeniAdresEkleDiv').hide();
            $('#YeniAdresEkle').hide();
            $('#AdresDuzenlemeDiv').html(data);
        };
    });
}




function IlceList() {
    var fldSehirID = $("#fldSehirID");
    if (fldSehirID.val() == "") { return false; }

    $.post("/ilcelistesi/?fldSehirID=" + fldSehirID.val(), function (data) {

        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#fldIlceID').empty();
            $('#fldMahalleID').empty();
            $('#IlceGetir').html(data);
            $('.IlceGetir').html(data);
        };
    });
}


function IlceListQ() {
    var KrfldSehirID = $("#KrfldSehirID");
    if (KrfldSehirID.val() == "") { return false; }

    $.post("/ilcelistesiQ/?fldSehirID=" + KrfldSehirID.val(), function (data) {

        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#KrfldIlceID').empty();
            $('#KrfldMahalleID').empty();
            $('#IlceGetirQ').html(data);
        };
    });
}


function MahalleListQ() {
    var KrfldIlceID = $("#KrfldIlceID");
    if (KrfldIlceID.val() == "") { return false; }

    $.post("/mahallelistesiQ/?fldIlceID=" + KrfldIlceID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#MahalleGetirQ').html(data);
        };
    });
}


function MahalleList() {
    var fldIlceID = $("#fldIlceID");
    if (fldIlceID.val() == "") { return false; }

    $.post("/mahallelistesi/?fldIlceID=" + fldIlceID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#MahalleGetir').html(data);
            $('.MahalleGetir').html(data);
        };
    });
}


function IlceList2() {
    var MfldSehirID = $("#MfldSehirID");
    if (MfldSehirID.val() == "") { return false; }

    $.post("/ilcelistesi2/?MfldSehirID=" + MfldSehirID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#MfldIlceID').empty();
            $('#MfldMahalleID').empty("");
            $('#IlceGetir2').html(data);
        };
    });
}


function MahalleList2() {
    var MfldIlceID = $("#MfldIlceID");
    if (MfldIlceID.val() == "") { return false; }

    $.post("/mahallelistesi2/?MfldIlceID=" + MfldIlceID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#MahalleGetir2').html(data);
        };
    });
}


function IlceList2Fatura() {
    var BfldSehirID = $("#BfldSehirID");
    if (BfldSehirID.val() == "") { return false; }

    $.post("/ilcelistesifatura/?BfldSehirID=" + BfldSehirID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#BfldIlceID').empty();
            $('#BfldMahalleID').empty();
            $('#IlceGetir2Fatura').html(data);
        };
    });
}


function MahalleList2Fatura() {
    var BfldIlceID = $("#BfldIlceID");
    if (BfldIlceID.val() == "") { return false; }

    $.post("/mahallelistesifatura/?BfldIlceID=" + BfldIlceID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#MahalleGetir2Fatura').html(data);
        };
    });
}

function VasitaBilgiDegistir(MLgB) {
    $.post("/bilgidegistirdetay/?SID=" + MLgB, function (data) {
        if (data == "ER") {

            location.reload();
            return false;
        }
        else {
            $('#BilgiDegistir').html(data);
        };
    });
}

function YorumPopup(SID) {
    $.post("/yorumdetay/?SID=" + SID, function (data) {
        if (data == "ER") {

            location.reload();
            return false;
        }
        else {
            $('#YorumDiv').html(data);
        };
    });
}

function YorumPopupMagaza(YID) {
    $.post("/yorumdetaymagaza/?YID=" + YID, function (data) {
        if (data == "ER") {

            location.reload();
            return false;
        }
        else {
            $('#YorumDivGoster').html(data);
        };
    });
}

function numberWithSpaces(value, pattern) {
    var i = 0,
        phone = value.toString();
    return pattern.replace(/#/g, _ => phone[i++]);
}

function BilgiTelefonGuncelleme() {

    var telsmscode = $("#telsmscode");
    if (telsmscode.val() == "") { return false; }


    $.post("/bilgidegistirguncellemetelefonupdate/?telsmscode=" + telsmscode.val(), function (data) {

        if (data == "ER") {

            alert("Hatalý Ýþlem");
        }
        else if (data == "ER0") {
            alert("Lütfen zorunlu alanlarý doldurunuz!");
            return false;
        }
        else if (data == "ER1") {
            alert("Girdiðiniz Þifre ile Hesabýnýz eþleþmedi lütfen sonra tekrar deneyiniz!");
            return false;
        }
        else if (data == "ER2") {
            alert("Sistemsel bir hata oluþtu lütfen sistem yöneticileri ile iletþime geçiniz!");
            return false;
        }
        else if (data == "OK") {
            alert("Bilgileriniz Güncellenmiþtir.");
            setTimeout(function () { window.location.reload(true); }, 3000);
        }
        else {
            window.location.reload(true)
        };
    });
}

function BilgiSmsGir(HebeleId) {


}

function BilgiGuncelle(TsdddID) {

    var MfldAd = $("#MfldAd");
    var MfldSoyad = $("#MfldSoyad");
    var MfldCep = $("#MfldCep");

    if (MfldAd.val() == "") { Popup("Arayanbuldu", "'Lütfen adýnýzý giriniz"); return false; }
    if (MfldSoyad.val() == "") { Popup("Arayanbuldu", "Lütfen soyadýnýzý giriniz"); return false; }
    if (MfldCep.val() == "") { Popup("Arayanbuldu", "'Cep telefonu numarasý girmelisiniz."); return false; }

    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "MfldCep=" + escape(MfldCep.val()) + "&MfldAd=" + escape(MfldAd.val()) + "&MfldSoyad=" + escape(MfldSoyad.val()) + "&TsdddID=" + TsdddID,
        url: "/bilgidegistirguncelleme/",
        cache: false,
        success: function (data) {

            if (data == "OK") {

                var counter = 60;
                var interval = setInterval(function () {
                    counter--;
                    if (counter <= 0) {
                        clearInterval(interval);
                        window.location.reload(true);
                        return;
                    } else {
                        $('#time').text(counter);
                        //console.log("Timer --> " + counter);
                    }
                }, 1000);

                Popup("<div style=\"display:inline-block\"><span id=\"timer\"><strong>SMS</strong> giriþ süresi <span style=\"font-weight:bold; color:#f00\" id=\"time\">60</span> saniye </span></div>", "<div>Güvenliðiniz için öncelikle,<br> kayýtlý <span style=\"color:#c00\">0" + MfldCep.val() + "</span> numaralý cep telefonunuza SMS ile gönderdiðimiz onay kodunu aþaðýdaki alana girin.<div class=\"c10\"></div><input type=\"text\" class=\"text-field-12 w-input\" name=\"telsmscode\" id=\"telsmscode\" maxlength=\"6\" onkeypress=\"return isNumberKey(event);\" placeholder=\"Lütfen telefonunuza gelen sms kodu giriniz\" required><input type=\"submit\" class=\"w100 button-devamet-uygula w-button\"  onclick=\"BilgiTelefonGuncelleme();\" value=\"GÖNDER\"><div class=\"c5\"></div></div>");
                   
                //setTimeout(function () { window.location.reload(true); }, 60000);
            }
            else if (data == "ER") {
                setTimeout(function () { window.location = "/"; }, 0);
            }
            else if (data == "ER0") {
                Popup("Arayanbuldu", "Lütfen zorunlu alanlarý doldurunuz!");
                return false;
            }
            else if (data == "ER1") {
                Popup("Arayanbuldu", "Üzgünüz, Hata Oluþtu, Lütfen tekrar deneyiniz");
                return false;
            }
            else if (data == "ER2") {
                Popup("Arayanbuldu", "Üzgünüz, Kayýt sorunu yaþýyorsunuz lütfen sonra tekrar deneyiniz");
                return false;
            }
            else if (data == "ER3") {
                Popup("Arayanbuldu", "Belirttiðiniz Cep Telefonu ile baþka kullanýcý mevcuttur! Lütfen sistem yöneticileri ile iletiþime geçiniz");
                return false;
            }
            else if (data == "ER4") {
                Popup("Arayanbuldu", "Zaten bu numarayý kullanýyorsun! Farklý Bir numara girmek için lütfen yeni iletiþim numaranýzý giriniz!");
                return false;
            }            
            else { };
        }
    });
}


function Yorumla(TID) {

    var fldMYorum = $("#fldMYorum");
    var fldUPuan = $("#fldUPuan");
    var fldUBaslik = $("#fldUBaslik");
    var fldUAciklama = $("#fldUAciklama");
    var selectedVal1 = "";
    var selectedVal2 = "";
    var selectedVal3 = "";
    var selectedVal4 = "";
    var selected1 = $("input[type='radio'][name='Secenek1']:checked");
    var selected2 = $("input[type='radio'][name='Secenek2']:checked");
    var selected3 = $("input[type='radio'][name='Secenek3']:checked");
    var selected4 = $("input[type='radio'][name='fldGizle']:checked");
    if (selected1.length > 0) { selectedVal1 = selected1.val();}
    if (selected2.length > 0) { selectedVal2 = selected2.val();}
    if (selected3.length > 0) { selectedVal3 = selected3.val();}
    if (selected4.length > 0) { selectedVal4 = selected4.val();}

    if (selectedVal1 == "") { Popup("Arayanbuldu", "'Ürün açýklamalarda anlatýldýðý gibiydi' seçimini boþ býraktýnýz."); return false; }
    if (selectedVal2 == "") { Popup("Arayanbuldu", "'Maðaza ürün paketine özen göstermiþti' seçimini boþ býraktýnýz."); return false; }
    if (fldUPuan.val() == "") { Popup("Arayanbuldu", "'Bu ürüne kaç yýldýz verirsiniz?' seçimini boþ býraktýnýz."); return false; }

    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "Secenek1=" + selectedVal1 + "&Secenek2=" + selectedVal2 + "&Secenek3=" + selectedVal3 + "&fldMYorum=" + escape(fldMYorum.val()) + "&fldUPuan=" + fldUPuan.val() + "&fldUBaslik=" + escape(fldUBaslik.val()) + "&fldUAciklama=" + escape(fldUAciklama.val()) + "&fldGizle=" + selectedVal4 + "&TID=" + TID,
        url: "/magazadegerlendir/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                $("#Secenek1").val("");
                $("#Secenek2").val("");
                $("#Secenek3").val("");
                $("#fldMYorum").val("");
                $("#fldUPuan").val("");
                $("#fldUBaslik").val("");
                $("#fldUAciklama").val("");
                $("#fldGizle").val("");
                Popup("Arayanbuldu", "Teþekkürler, yorumunuz kaydedilmiþtir.");
                setTimeout(function () { window.location.reload(true) }, 3000);
            }
            else if (data == "ER0") {
                Popup("Arayanbuldu", "Lütfen zorunlu alanlarý doldurunuz!");
                setTimeout(function () { window.location.reload(true) }, 3000);
            }
            else if (data == "ER") {
                Popup("Arayanbuldu", "Üzgünüz, Hata Oluþtu, Lütfen tekrar deneyiniz");
                setTimeout(function () { window.location.reload(true) }, 3000);
            }
            else if (data == "ER2") {
                Popup("Arayanbuldu", "Üzgünüz, Kayýt sorunu yaþýyorsunuz lütfen sonra tekrar deneyiniz");
                setTimeout(function () { window.location.reload(true) }, 3000);
            }
            else if (data == "ER3") {
                Popup("Arayanbuldu", "Daha önce bu ürünü ve maðazayý yorumlama yaptýnýz");
                setTimeout(function () { window.location.reload(true) }, 3000);
            }
            else { };
        }
    });
}


function YorumPopSil(YIDD) {
    if (confirm("Yorumunuz silinecektir. Devam etmek istiyor musunuz?")) {
        $.post("/yorum-sil/?YIDD=" + YIDD, function (data) {

            if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
            }

            else {
                window.location.reload(true);
            };
        });
    }
    else {
    }
}

function GrupSelectListeleme(fldGrupID) {

    var fldGrupID = $("#fldGrupID");
    if (fldGrupID.val() == "") { return false; }

        $.post("/magaza_urunlistesi_kategoriselect/?fldGrupID=" + fldGrupID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {

            $('#UrunListesiKategoriGetir').html(data);
        };
    });
}

function KategoriSelectListeleme(fldKatID) {

    var fldKatID = $("#fldKatID");
    if (fldKatID.val() == "") { return false; }

    $.post("/magaza_urunlistesi_altkategoriselect/?fldKatID=" + fldKatID.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {

            $('#UrunListesiAltKategoriGetir').html(data);
        };
    });
}

function GrupSelect(GrupID) {

    var full_data = GrupID.value;
    var dataSplit = full_data.split("@");

    var GrupID = dataSplit[0];
    var GrupAd = dataSplit[1];

    if (GrupID == "") { return false; }

    $.post("/select_kat_listesi/?GrupID=" + GrupID, function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $("#GrupAd").empty();
            $("#KatAd").empty();
            $("#AltKatAd").empty();
            $("#SubkatAd").empty();
            $("#MarkaAd").empty();
            $("#SeriAd").empty();
            $('#Kat_Getir').empty();
            $('#AltKat_Getir').empty();       
            $('#SubKat_Getir').empty();
            $('#Marka_Getir').empty();
            $('#Seri_Getir').empty();
            $('#Kat2').val("");
            $('#Kat3').val("");
            $('#Kat4').val("");
            $('#Kat5').val("");
            $('#Kat6').val("");

            $("#GrupAd").html(GrupAd + " <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>");
            $('#Kat_Getir').html(data);
            $('#Kat1').val(GrupID);
        };
    });
}


function KatSelect(KatID) {

    var full_data = KatID.value;
    var dataSplit = full_data.split("@");

    var KatID = dataSplit[0];
    var KatAd = dataSplit[1];

    if (KatID == "") { return false; }

    $.post("/select_altkat_listesi/?KatID=" + KatID, function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {

            $("#KatAd").empty();
            $("#AltKatAd").empty();
            $("#SubkatAd").empty();
            $("#MarkaAd").empty();
            $("#SeriAd").empty();
            $('#AltKat_Getir').empty();
            $('#SubKat_Getir').empty();
            $('#Marka_Getir').empty();
            $('#Seri_Getir').empty();
            $('#Kat3').val("");
            $('#Kat4').val("");
            $('#Kat5').val("");
            $('#Kat6').val("");

            $("#KatAd").html(KatAd + " <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>");
            $('#AltKat_Getir').html(data);
            $('#Kat2').val(KatID);
        };
    });
}


function AltKatSelect(AltKatID) {

    var full_data = AltKatID.value;
    var dataSplit = full_data.split("@");

    var AltKatID = dataSplit[0];
    var AltKatAd = dataSplit[1];

    if (AltKatID == "") { return false; }

    $.post("/select_subkat_listesi/?AltKatID=" + AltKatID, function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {

            $("#AltKatAd").empty();
            $("#SubkatAd").empty();
            $("#MarkaAd").empty();
            $("#SeriAd").empty();
            $('#SubKat_Getir').empty();
            $('#Marka_Getir').empty();
            $('#Seri_Getir').empty();
            $('#Kat4').val("");
            $('#Kat5').val("");
            $('#Kat6').val("");
            $("#AltKatAd").html(AltKatAd + " <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>");
            $('#SubKat_Getir').html(data);
            $('#Kat3').val(AltKatID);
        };
    });
}


function SubKatSelect(SubkatID) {

    var full_data = SubkatID.value;
    var dataSplit = full_data.split("@");

    var SubkatID = dataSplit[0];
    var SubkatAd = dataSplit[1];

    if (SubkatID == "") { return false; }

    $.post("/select_marka_listesi/?SubkatID=" + SubkatID, function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {

            $("#SubkatAd").empty();
            $("#MarkaAd").empty();
            $("#SeriAd").empty();
            $('#Marka_Getir').empty();
            $('#Seri_Getir').empty();
            $('#Kat5').val("");
            $('#Kat6').val("");
            $("#SubkatAd").html(SubkatAd + " <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>");
            $('#Marka_Getir').html(data);
            $('#Kat4').val(SubkatID);
            $('#KontrolBtn').prop('disabled', false);
 

        };
    });
}

function MarkaSelect(MarkaID) {

    var full_data = MarkaID.value;
    var dataSplit = full_data.split("@");

    var MarkaID = dataSplit[0];
    var MarkaAd = dataSplit[1];

    if (MarkaID == "") { return false; }

    $.post("/select_seriler_listesi/?MarkaID=" + MarkaID, function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {

            $("#SeriAd").empty();
            $('#Seri_Getir').empty();
            $('#Kat5').val("");
            $('#Kat6').val("");
            $("#MarkaAd").html(MarkaAd + " <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>");
            $('#Seri_Getir').html(data);
            $('#Kat5').val(MarkaID);
        };
    });
}



function SeriSelect(SeriID) {

    var full_data = SeriID.value;
    var dataSplit = full_data.split("@");

    var SeriID = dataSplit[0];
    var SeriAd = dataSplit[1];

    if (SeriID == "") { return false; }

    $.post("/select_model_listesi/?SeriID=" + SeriID, function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {

            $('#Kat6').val("");
            $("#SeriAd").html(SeriAd + "");
            $('#Kat6').val(SeriID);
        };
    });
}


function filter() {
    var keyword = document.getElementById("search").value;
    var fleet = document.getElementById("fldMarkaID");
    for (var i = 0; i < fleet.length; i++) {
        var txt = fleet.options[i].text;
        if (txt.substring(0, keyword.length).toLowerCase() !== keyword.toLowerCase() && keyword.trim() !== "") {
            fleet.options[i].style.display = 'none';
        } else {
            fleet.options[i].style.display = 'list-item';
        }
    }
}

function filter2() {
    var keyword = document.getElementById("search2").value;
    var fleet = document.getElementById("fldModelID");
    for (var i = 0; i < fleet.length; i++) {
        var txt = fleet.options[i].text;
        if (txt.substring(0, keyword.length).toLowerCase() !== keyword.toLowerCase() && keyword.trim() !== "") {
            fleet.options[i].style.display = 'none';
        } else {
            fleet.options[i].style.display = 'list-item';
        }
    }
}

function filter3() {
    var keyword = document.getElementById("search3").value;
    var fleet = document.getElementById("fldSeriID");
    for (var i = 0; i < fleet.length; i++) {
        var txt = fleet.options[i].text;
        if (txt.substring(0, keyword.length).toLowerCase() !== keyword.toLowerCase() && keyword.trim() !== "") {
            fleet.options[i].style.display = 'none';
        } else {
            fleet.options[i].style.display = 'list-item';
        }
    }
}


$("#KontrolBtn").click(function (e) {
    var Kat1 = $('#Kat1');
    var Kat2 = $('#Kat2');
    var Kat3 = $('#Kat3');
    var Kat4 = $('#Kat4');


    if (Kat1.val() == "") { Popup("Arayanbuldu", "Lütfen Grup Seçiniz."); return false; }
    if (Kat2.val() == "") { Popup("Arayanbuldu", "Lütfen Kategori Kategori Seçiniz."); return false; }
    if (Kat3.val() == "") { Popup("Arayanbuldu", "Lütfen Alt Kategori Seçiniz."); return false; }
    if (Kat4.val() == "") { Popup("Arayanbuldu", "Lütfen Sub Kategori Seçiniz."); return false; }


    $("#UrunStep1Send").submit();
});



$(function () {
    $('.FaturaSec').change(function () {
        if ($(this).val() == "Br") {
            $("#BireyselDiv").show();
            $("#KurumsalDiv").hide();
        }
        else {
            $("#KurumsalDiv").show();
            $("#BireyselDiv").hide();
        }
    });
});


function BankaHesapSil(IDXX) {
    if (confirm("Bu banka hesabýný silmek istediðinizden emin misiniz?")) {
        $.post("/bankahesabi-sil/?IDXX=" + IDXX, function (data) {

            if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
            }

            else {
                window.location.reload(true);
            };
        });
    }
    else {
    }
}

function SecenekTur(VID) {
    var VaryasyonGrupAd = $('#VaryasyonGrupAd');

    if (VaryasyonGrupAd.val() == "") { Popup("Arayanbuldu", "Lütfen Varyasyon Türü yazýnýz."); return false; }

    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "VaryasyonGrupAd=" + escape(VaryasyonGrupAd.val()) + "&VID=" + VID,
        url: "/urunvaryant-secenekekle/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                $("#VaryasyonGrupAd").val("");
                $("#VaryasyonGrupSira").val("");
                window.location.reload(true);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kayda Eklemeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Varyant Seçenegi Eklerken Hata Algýlandý Lütfen sistem yöneticileri ile iletiþime geçiniz");
            }
            else if (data == "ER3") {

                Popup("Arayanbuldu", "Ayný Kaydý Daha Önce Eklediniz! Lütfen farklý bir seçenek giriniz");
            }

            else { };
        }
    });

}



function VaryantListesi(UUID) {
    $.post("/varyantsecenek-listesi/?UUID=" + UUID, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#SecenekTurleri').html(data);
        };
    });
}


function VaryantKayitListesi(VaryanttIDD, VaryanttPRD) {
    $.post("/varyantkayit-listesi/?VaryanttIDD=" + VaryanttIDD + "&VaryanttPRD=" + VaryanttPRD, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#VaryantGosterDiv').html(data);
        };
    });
}



function VaryantTurSil(TURID) {
    if (confirm("Bu varyant seçimini silmek istediðinizden emin misiniz?")) {
        $.post("/urunvaryantsecenek-sil/?TURID=" + TURID, function (data) {

            if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
            }

            else {
                window.location.reload(true);
            };
        });
    }
    else {
    }
}


function VaryantTekTipEkle(aaaaSecimID) {

    var VarAd = $('#VarAd');
    var VarStokKodu = $('#VarStokKodu');
    var VarStok = $('#VarStok');
    var VarSatis1 = $('#VarSatis1');
    var VarSatis2 = $('#VarSatis2');
    var VarIndirim = $('#VarIndirim');
    var VarSira = $('#VarSira');

    var full_data = aaaaSecimID;
    var dataSplit = full_data.split("@");
    var SecimID = dataSplit[0];
    var UrunID = dataSplit[1];

    if (VarAd.val() == "") { Popup("Arayanbuldu", "Lütfen Özellik Adýný boþ býrakmayýnýz."); return false; }
    if (VarStok.val() == "") { Popup("Arayanbuldu", "Lütfen Stok Adetini boþ býrakmayýnýz."); return false; }
    if (VarSatis1.val() == "") { Popup("Arayanbuldu", "Lütfen Satýþ Lirasýný boþ býrakmayýnýz."); return false; }
    if (VarSatis2.val() == "") { Popup("Arayanbuldu", "Lütfen Satýþ Küsüratýný boþ býrakmayýnýz."); return false; }
    if (VarIndirim.val() == "") { Popup("Arayanbuldu", "Lütfen Ýndirim Oranýný boþ býrakmayýnýz."); return false; }


    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "VarAd=" + escape(VarAd.val()) + "&VarStokKodu=" + VarStokKodu.val() + "&VarStok=" + VarStok.val() + "&VarSatis=" + VarSatis1.val() + "." + VarSatis2.val() + "&VarSira=" + VarSira.val() + "&VarIndirim=" + VarIndirim.val() +  "&SecimID=" + SecimID + "&UrunID=" + UrunID,
        url: "/urunvaryant-tektipozellikekle/",
        cache: false,
        success: function (data) {
            if (data == "OK") {
                $("#ciftgonder").css("display", "none");
                $("#VarAd").val("");
                $("#VarStokKodu").val("");
                $("#VarStok").val("");
                $("#VarSatis1").val("");
                $("#VarSatis2").val("00");
                $("#VarIndirim").val("0");
                $("#VarSira").val("");
                $("#MagazaIndirimYuzdesiYansit").html("0,00 TL");
                VaryantKayitListesi(SecimID, UrunID);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kayda Eklemeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Varyant Özelliði Eklerken Hata Algýlandý Lütfen sistem yöneticileri ile iletiþime geçiniz");
            }
            else if (data == "ER3") {

                Popup("Arayanbuldu", "Ayný Kaydý Daha Önce Eklediniz! Lütfen farklý bir seçenek giriniz");
            }

            else { };
        }
    });

}



function VaryantTekTipSil(TURID, VarDonID) {

    var full_data = VarDonID;
    var dataSplit = full_data.split("@");
    var VarDonIDxxx = dataSplit[1];
    var VarUrunID = dataSplit[0];

    if (confirm("Bu varyant seçimini silmek istediðinizden emin misiniz?")) {
        $.post("/urunvaryantozellik-sil/?TURID=" + TURID, function (data) {

            if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
            }

            else {
                VaryantKayitListesi(VarDonIDxxx, VarUrunID);
            };
        });
    }
    else {
    }
}


function VaryantTekTipDuzenle(ttSecimID) {

    var fldVAd = $('#fldVAd');
    var fldVStokTakipKodu = $('#fldVStokTakipKodu');
    var fldVStok = $('#fldVStok');
    var fldVSatisFiyat = $('#fldVSatisFiyat');
    var fldVIndirimOran = $('#fldVIndirimOran');
    var fldVSira = $('#fldVSira');

    if (fldVAd.val() == "") { Popup("Arayanbuldu", "Lütfen Özellik Adýný boþ býrakmayýnýz."); return false; }
    if (fldVStok.val() == "") { Popup("Arayanbuldu", "Lütfen Stok Adetini boþ býrakmayýnýz."); return false; }
    if (fldVSatisFiyat.val() == "") { Popup("Arayanbuldu", "Lütfen Satýþ fiyatýný boþ býrakmayýnýz."); return false; }
    if (fldVIndirimOran.val() == "") { Popup("Arayanbuldu", "Lütfen Ýndirim Yüzde Oranýný boþ býrakmayýnýz."); return false; }


    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "VarAd=" + escape(fldVAd.val()) + "&VarStokKodu=" + fldVStokTakipKodu.val() + "&VarStok=" + fldVStok.val() + "&VarSatis=" + fldVSatisFiyat.val() + "&VarIndirim=" + fldVIndirimOran.val() + "&VarSira=" + fldVSira.val() + "&ttSecimID=" + ttSecimID,
        url: "/urunvaryant-tektipozelliduzenle/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                Popup("Arayanbuldu", "Düzenleme Ýþleminiz Baþarýyla Gerçekleþmiþtir.");
                setTimeout(function () { window.location.reload(true); }, 1000);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kayda Eklemeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Varyant Özelliði Eklerken Hata Algýlandý Lütfen sistem yöneticileri ile iletiþime geçiniz");
            }
            else if (data == "ER3") {

                Popup("Arayanbuldu", "Ayný Kaydý Daha Önce Eklediniz! Lütfen farklý bir seçenek adý giriniz");
            }

            else { };
        }
    });

}


function VaryantIndirimDuzenle(indirimSecimID) {

    var indirimOran = $('#indirimOran');


    if (indirimOran.val() == "") { Popup("Arayanbuldu", "Lütfen Ýndirim Yüzde Oranýný boþ býrakmayýnýz."); return false; }


    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "indirimOran=" + indirimOran.val() + "&indirimSecimID=" + indirimSecimID,
        url: "/urunvaryant-indirimduzenle/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                Popup("Arayanbuldu", "Düzenleme Ýþleminiz Baþarýyla Gerçekleþmiþtir.");
                setTimeout(function () { window.location.reload(true); }, 1000);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kayda Eklemeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Varyant Özelliði Eklerken Hata Algýlandý Lütfen sistem yöneticileri ile iletiþime geçiniz");
            }

            else { };
        }
    });

}

function AltSecenekEkle(qID, pIDd) {
    var AltSecBaslik = $('#AltSecBaslik');
    var AltSecBaslikSira = $('#AltSecBaslikSira');

    if (AltSecBaslik.val() == "") { Popup("Arayanbuldu", "Lütfen Varyasyon Alt Seçeneði yazýnýz."); return false; }

    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "AltSecBaslik=" + escape(AltSecBaslik.val()) + "&AltSecBaslikSira=" + AltSecBaslikSira.val() + "&qID=" + qID + "&pIDd=" + pIDd,
        url: "/urunvaryant-altsecimekle/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                AltOzellikListesi(qID, pIDd);
                $("#tekgonder").css("display", "none");
                $("#AltSecBaslik").val("");
                $("#AltSecBaslikSira").val("");
                AltSecenekListesi(qID, pIDd);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kayda Eklemeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Varyant Alt Seçeneði Eklerken Hata Algýlandý Lütfen sistem yöneticileri ile iletiþime geçiniz");
            }
            else if (data == "ER3") {

                Popup("Arayanbuldu", "Ayný Kaydý Daha Önce Eklediniz! Lütfen farklý bir seçenek giriniz");
            }

            else { };
        }
    });

}

function AltSecenekListesi(ASCNKIDD, PRDIDD) {
    $.post("/altvaryantkayit-listesi/?ASCNKIDD=" + ASCNKIDD + "&PRDIDD=" + PRDIDD, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#AltSecimGosterDiv').html(data);
        };
    });
}


function VaryantCiftTipDuzenle(aaattSecimID) {

    var fldVAdCift = $('#fldVAdCift');
    var fldVSiraCift = $('#fldVSiraCift');

    if (fldVAdCift.val() == "") { Popup("Arayanbuldu", "Lütfen Alt Seçenek Adýný boþ býrakmayýnýz."); return false; }



    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "fldVAdCift=" + escape(fldVAdCift.val()) + "&fldVSiraCift=" + fldVSiraCift.val() + "&aaattSecimID=" + aaattSecimID,
        url: "/varyant-ciftsecenekduzenleresult/",
        cache: false,
        success: function (data) {
            if (data == "OK") {
                Popup("Arayanbuldu", "Düzenleme Ýþleminiz Baþarýyla Gerçekleþmiþtir.");
                setTimeout(function () { window.location.reload(true); }, 1000);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kayda Eklemeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Varyant Özelliði Eklerken Hata Algýlandý Lütfen sistem yöneticileri ile iletiþime geçiniz");
            }
            else if (data == "ER3") {

                Popup("Arayanbuldu", "Ayný Kaydý Daha Önce Eklediniz! Lütfen farklý bir seçenek adý giriniz");
            }

            else { };
        }
    });

}



function VaryantCiftSecenekSil(AltVID, aVarDonID) {

    var full_data = aVarDonID;
    var dataSplit = full_data.split("@");
    var VarDonIDxxxa = dataSplit[1];
    var aVarUrunID = dataSplit[0];

    if (confirm("Bu varyant seçimini silmek istediðinizden emin misiniz?")) {
        $.post("/urunvaryantozellikcift-sil/?aTURID=" + AltVID, function (data) {

            if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
            }

            else {
                setTimeout(function () { window.location.reload(true); }, 1000);
            };
        });
    }
    else {
    }
}



function AltOzellikListesi(aOVaryantID, aOPrdID) {
    $.post("/altsecenekler-listesi/?OVaryantID=" + aOVaryantID + "&OPrdID=" + aOPrdID, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            AltVaryantKayitListesi(aOVaryantID, aOPrdID);
            $('#AltOzellikListesi').html(data);
        };
    });
}

function AltKategoriVaryantEkle(AltKategoriSecimID) {

    var AltKategoriID = $('#AltKategoriID');
    var AltKategoriAd = $('#AltKategoriAd');
    var AltKategoriStokKodu = $('#AltKategoriStokKodu');
    var AltKategoriStok = $('#AltKategoriStok');
    var AltKategoriSatis1 = $('#AltKategoriSatis1');
    var AltKategoriSatis2 = $('#AltKategoriSatis2');
    var AltKategoriIndirim = $('#AltKategoriIndirim');
    var AltKategoriSira = $('#AltKategoriSira');

    var full_data = AltKategoriSecimID;
    var dataSplit = full_data.split("@");
    var wSecimID = dataSplit[0];
    var wUrunID = dataSplit[1];

    if (AltKategoriID.val() == "") { Popup("Arayanbuldu", "Lütfen Alt Varyant Seçeneði Seçiniz."); return false; }
    if (AltKategoriAd.val() == "") { Popup("Arayanbuldu", "Lütfen Özellik Adýný boþ býrakmayýnýz."); return false; }
    if (AltKategoriStok.val() == "") { Popup("Arayanbuldu", "Lütfen Stok Adetini boþ býrakmayýnýz."); return false; }
    if (AltKategoriSatis1.val() == "") { Popup("Arayanbuldu", "Lütfen Satýþ Lirasýný boþ býrakmayýnýz."); return false; }
    if (AltKategoriSatis2.val() == "") { Popup("Arayanbuldu", "Lütfen Satýþ Küsüratýný boþ býrakmayýnýz."); return false; }
    if (AltKategoriIndirim.val() == "") { Popup("Arayanbuldu", "Lütfen Ýndirim Yüzde Oranýný boþ býrakmayýnýz."); return false; }


    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "AltKategoriID=" + AltKategoriID.val() + "&AltKategoriAd=" + escape(AltKategoriAd.val()) + "&AltKategoriStokKodu=" + AltKategoriStokKodu.val() + "&AltKategoriStok=" + AltKategoriStok.val() + "&AltKategoriSatis=" + AltKategoriSatis1.val() + "." + AltKategoriSatis2.val() + "&AltKategoriIndirim=" + AltKategoriIndirim.val() + "&AltKategoriSira=" + AltKategoriSira.val() + "&wSecimID=" + wSecimID + "&wUrunID=" + wUrunID,
        url: "/altkategori-varyantekleme/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                AltVaryantKayitListesi(AltKategoriID.val(), wUrunID);
                $("#tekgonder").css("display", "none");
                $("#AltKategoriID").val("");
                $("#AltKategoriAd").val("");
                $("#AltKategoriStokKodu").val("");
                $("#AltKategoriStok").val("");
                $("#AltKategoriSatis1").val("");
                $("#AltKategoriSatis2").val("00");
                $("#AltKategoriIndirim").val("0");
                $("#AltKategoriSira").val("");
                $("#MagazaIndirimYuzdesiYansit2").html("0,00 TL");
                AltKategoriVaryantSecimListesi(wSecimID, wUrunID);

            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kayda Eklemeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Varyant Özelliði Eklerken Hata Algýlandý Lütfen sistem yöneticileri ile iletiþime geçiniz");
            }
            else if (data == "ER3") {

                Popup("Arayanbuldu", "Ayný Kaydý Daha Önce Eklediniz! Lütfen farklý bir seçenek giriniz");
            }

            else { };
        }
    });

}


function AltVaryantKayitListesi(AltVarID, AltVarPrID) {
    $.post("/varyant-secenek-listesi/?AltVarID=" + AltVarID + "&AltVarPrID=" + AltVarPrID, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#VaryantGosterDivCift').html(data);
        };
    });
}

function VaryantCiftTipSil(ssTURID, ssVarDonID) {

    var full_data = ssVarDonID;
    var dataSplit = full_data.split("@");
    var VIDScnkID = dataSplit[1];
    var VIDUrunID = dataSplit[0];

    if (confirm("Bu varyant seçimini silmek istediðinizden emin misiniz?")) {
        $.post("/urunvaryantozellikalt-sil/?ssTURID=" + ssTURID, function (data) {

            if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else if (data == "ER1") {
                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
            }

            else if (data == "ER2") {

                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
            }

            else {
                AltVaryantKayitListesi(VIDScnkID, VIDUrunID);
            };
        });
    }
    else {
    }
}

function GorselEkleme(GID, PRDIMAGE) {

    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "PRDIMAGE=" + PRDIMAGE + "&GID=" + GID,
        url: "/gorsel-ekleme/",
        cache: false,
        success: function (data) {
			
            if (data == "OK") {
                GorselListesi(GID);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }
            else if (data == "ER1") {

                Popup("Arayanbuldu", "Bu Ürün Aktiftir Resim Eklenemez!");
            }
            else if (data == "ER2") {

                Popup("Arayanbuldu", "Kayýt Sorunu Algýlandý");
            }			
            else { };
        }
    });

}


function GorselEkleme2(GID, PRDIMAGE) {

    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "PRDIMAGE=" + PRDIMAGE + "&GID=" + GID,
        url: "/gorsel-ekleme2/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                GorselListesi2(GID);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }
            else if (data == "ER1") {

                Popup("Arayanbuldu", "Bu Ürün Aktiftir Resim Eklenemez!");
            }
            else if (data == "ER2") {

                Popup("Arayanbuldu", "Kayýt Sorunu Algýlandý");
            }
            else { };
        }
    });

}

function GorselListesi(IDDXXXX) {
    $.post("/gorsel-listesi/?IDDXXXX=" + IDDXXXX , function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#GorselListesiDiv').html(data);
        };
    });
}

function GorselListesi2(IDDXXXX) {
    $.post("/gorsel-listesi2/?IDDXXXX=" + IDDXXXX, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#GorselListesiDiv2').html(data);
        };
    });
}

function PrResimSil(ResimIDD, PRRRIDD) {

    $.post("/gorsel-sil/?ResimIDD=" + ResimIDD + "&PRRRIDD=" + PRRRIDD, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else {
				GorselListesi(PRRRIDD)
        };
    });

}

function PrResimSil2(ResimIDD, PRRRIDD) {

    $.post("/gorsel-sil2/?ResimIDD=" + ResimIDD + "&PRRRIDD=" + PRRRIDD, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else {
            GorselListesi2(PRRRIDD)
        };
    });

}

function PrVitrinSec(PrResimIDD, PrPRRRIDD) {

    $.post("/gorsel-vitrin/?PrResimIDD=" + PrResimIDD + "&PrPRRRIDD=" + PrPRRRIDD, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else {
            GorselListesi(PrPRRRIDD)
        };
    });

}

function PrVitrinSec2(PrResimIDD, PrPRRRIDD) {

    $.post("/gorsel-vitrin2/?PrResimIDD=" + PrResimIDD + "&PrPRRRIDD=" + PrPRRRIDD, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else {
				GorselListesi2(PrPRRRIDD)
        };
    });

}

$("#KontrolBtn3").click(function (e) {


    CKEDITOR.instances.fldUrunAciklama.updateElement();
    var fldUrunAd = $('#fldUrunAd');
    var fldTipTanimla = $('#fldTipTanimla');
    var fldUrunDurumSec = $('#fldUrunDurumSec');
    var fldUrunAciklama = $('#fldUrunAciklama');
    var KargoKimOder = $('#KargoKimOder');
    var fldUrunKargoSehir = $('#fldUrunKargoSehir');
    var fldUrunKargoID = $('#fldUrunKargoID');
    var KargoTeslimSuresi = $('#KargoTeslimSuresi');
    
    if (fldTipTanimla.val() == 0) {
        var fldUrunStok = $('#fldUrunStok');
        var VarSatis1 = $('#VarSatis1');
        var VarSatis2 = $('#VarSatis2');
    }
    if (KargoKimOder.val() == 2) {
        var fldUrunAliciTutar1 = $('#fldUrunAliciTutar1');
        var fldUrunAliciTutar2 = $('#fldUrunAliciTutar2');
    }
    if (KargoTeslimSuresi.val() == 1) {
        var KargoTeslimSureSaat1 = $('#KargoTeslimSureSaat1');
        var KargoTeslimSureSaat2 = $('#KargoTeslimSureSaat2');
    }


    if (fldUrunAd.val() == "") { Popup("Arayanbuldu", "Lütfen baþlýk yazýnýz."); return false; }
    if (fldTipTanimla.val() == "") { Popup("Arayanbuldu", "Lütfen varyant seçiniz."); return false; }
    if (fldUrunDurumSec.val() == "") { Popup("Arayanbuldu", "Lütfen durum seçiniz."); return false; }
    if (fldUrunAciklama.val() == "") { Popup("Arayanbuldu", "Lütfen açýklama yazýnýz."); return false; }
    if (KargoKimOder.val() == "") { Popup("Arayanbuldu", "Lütfen Kargo ücretini kim ödeyecek? seçiniz."); return false; }
    if (fldUrunKargoSehir.val() == "") { Popup("Arayanbuldu", "Hangi þehirden kargoya vereceðinizi seçin"); return false; }
    if (fldUrunKargoID.val() == "") { Popup("Arayanbuldu", "Kargo firmasý seçiniz?"); return false; }
    if (fldTipTanimla.val() == 0) {
        if (fldUrunStok.val() == "") { Popup("Arayanbuldu", "Lütfen geçerli bir stok giriniz!"); return false; }
        if (VarSatis1.val() == "") { Popup("Arayanbuldu", "Lütfen geçerli bir ürün ücreti (lira) giriniz!"); return false; }
        if (VarSatis2.val() == "") { Popup("Arayanbuldu", "Lütfen geçerli bir ürün ücreti (kuruþ) giriniz!"); return false; }
    }

    if (KargoKimOder.val() == 2) {
        if (fldUrunAliciTutar1.val() == "") { Popup("Arayanbuldu", "Lütfen geçerli bir kargo ücreti (lira) giriniz!"); return false; }
        if (fldUrunAliciTutar2.val() == "") { Popup("Arayanbuldu", "Lütfen geçerli bir kargo ücreti (kuruþ) giriniz!"); return false; }
    }
    if (KargoTeslimSuresi.val() == "") { Popup("Arayanbuldu", "Ne zaman kargoya teslim edeceksiniz? seçiniz"); return false; }
    if (KargoTeslimSuresi.val() == 1) {
        if (KargoTeslimSureSaat1.val() == "") { Popup("Arayanbuldu", "Lütfen saat seçiniz"); return false; }
        if (KargoTeslimSureSaat2.val() == "") { Popup("Arayanbuldu", "Lütfen dakika seçiniz"); return false; }
    }


    $("#UrunStep3Send").submit();
});


function IlanPaketleri(GelenIxFgc) {
    $.post("/ilanpaketlerilistesi/?GelenIxFgc=" + GelenIxFgc, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#IlanPaketListesi').html(data);
        };
    });
}


function UrunReklamPaketleri(UrunIDReklam) {
    $.post("/urunreklampaketleri-listesi/?UrunIDReklam=" + UrunIDReklam, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#UrunReklamPaketleriGosterDiv').html(data);
        };
    });
}



function UrunReklamPaketleri2(UrunIDReklam) {
    $.post("/urunreklampaketleri-listesi2/?UrunIDReklam=" + UrunIDReklam, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#UrunReklamPaketleriGosterDiv2').html(data);
        };
    });
}




function UrunReklamPaketleriEklenen(UrunIDReklamd) {
    $.post("/urunreklampaketleri-eklenenlistesi/?UrunIDReklamd=" + UrunIDReklamd, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#UrunReklamPaketAdetDiv').html(data);
        };
    });
}

function UrunReklamPaketleriEklenen2(UrunIDReklamd) {
    $.post("/urunreklampaketleri-eklenenlistesi2/?UrunIDReklamd=" + UrunIDReklamd, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            $('#UrunReklamPaketAdetDiv2').html(data);
        };
    });
}

function UrunReklamSepetTutar(sepUrunIDReklam) {
    $.post("/urunreklampaketleri-tutar/?sepUrunIDReklam=" + sepUrunIDReklam, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            var SonucTemiz = data;
            var SonucYazdir = data.replace(' TL', '');

            if (SonucYazdir == "0,00") {
                $('#OdemeGecReklamDiv').css('display', 'none');
            } else {
                $('#OdemeGecReklamDiv').css('display', 'inline-block');
            }


            $('#UrunReklamSepetTutar').html(SonucTemiz);
        };
    });
}


function UrunReklamSepetTutar2(sepUrunIDReklam) {
    $.post("/urunreklampaketleri-tutar2/?sepUrunIDReklam=" + sepUrunIDReklam, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else {
            var SonucTemiz = data;
            var SonucYazdir = data.replace(' TL', '');

            if (SonucYazdir == "0,00") {
                $('#OdemeGecReklamDiv2').css('display', 'none');
            } else {
                $('#OdemeGecReklamDiv2').css('display', 'inline-block');
            }


            $('#UrunReklamSepetTutar2').html(SonucTemiz);
        };
    });
}


function VasitaFavoriEkle(fldUrun_ID) {
    $.post("/vasitafavori-ekle/?fldUrun_ID=" + fldUrun_ID, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else {
            $("#FavOnay" + fldUrun_ID + "").html("<a data-tooltip=\"Favorimden Çýkar\" href=\"javascript:;\" onclick =\"return UrunFavoriCikar('" + fldUrun_ID + "')\" class=\"favoriaktif w-inline-block\"></a>");
        };
    });
}


function VasitaFavoriCikar(fldUrun_ID) {
    $.post("/vasitafavori-cikar/?fldUrun_ID=" + fldUrun_ID, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else {
            $(".FavOnay" + fldUrun_ID + "").html("<a data-tooltip=\"Favorime Ekle\" href=\"javascript:;\" onclick =\"return UrunFavoriEkle('" + fldUrun_ID + "')\" class=\"favoripasif w-inline-block\"></a>");
            $("#FavOnay" + fldUrun_ID + "").html("<a data-tooltip=\"Favorime Ekle\" href=\"javascript:;\" onclick =\"return UrunFavoriEkle('" + fldUrun_ID + "')\" class=\"favoripasif w-inline-block\"></a>");
        };
    });
}



function UrunFavoriEkle(fldUrun_ID) {
    $.post("/urunfavori-ekle/?fldUrun_ID=" + fldUrun_ID, function (data) {
        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else {
            $(".FavOnay" + fldUrun_ID + "").html("<a data-tooltip=\"Favorimden Çýkar\" href=\"javascript:;\" onclick =\"return UrunFavoriCikar('" + fldUrun_ID + "')\" class=\"favoriaktif w-inline-block\"></a>");
            $("#FavOnay" + fldUrun_ID + "").html("<a data-tooltip=\"Favorimden Çýkar\" href=\"javascript:;\" onclick =\"return UrunFavoriCikar('" + fldUrun_ID + "')\" class=\"favoriaktif w-inline-block\"></a>");
        };
    });
}

function UrunFavoriCikar(fldUrun_ID) {
    $.post("/urunfavori-cikar/?fldUrun_ID=" + fldUrun_ID, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Silmeye Çalýþýyorsunuz!");
        }

        else {
            $(".FavOnay" + fldUrun_ID + "").html("<a data-tooltip=\"Favorime Ekle\" href=\"javascript:;\" onclick =\"return UrunFavoriEkle('" + fldUrun_ID + "')\" class=\"favoripasif w-inline-block\"></a>");
            $("#FavOnay" + fldUrun_ID + "").html("<a data-tooltip=\"Favorime Ekle\" href=\"javascript:;\" onclick =\"return UrunFavoriEkle('" + fldUrun_ID + "')\" class=\"favoripasif w-inline-block\"></a>");
        };
    });
}

function NormalSepetEkleme(UrnIDSpt) {


    if (UrnIDSpt == "") { Popup("Arayanbuldu", "Hatalý Ýþlem!"); return false; }
    if (UrnIDSpt == "undefined") { Popup("Arayanbuldu", "Hatalý Ýþlem!"); return false; }

    $.post("/urunsepete-ekle/?UrnIDSpt=" + UrnIDSpt, function (data) {

        if (data == "ER0") {

            Popup("Arayanbuldu", "Hata Algýlandý");
        }

        else if (data == "ER1") {
            Popup("Arayanbuldu", "Bu ürün aktif deðildir veya bulunamadý lütfen tekrar deneyiniz!");
        }

        else if (data == "ER2") {

            Popup("Arayanbuldu", "Ürünün Stoðu Tüklenmiþtir.");
        }

        else if (data == "ER3") {

            Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
        }
        else if (data == "ER4") {

            Popup("Arayanbuldu", "<strong style=\"color:#ff6000\">Maðaza</strong> ve <strong style=\"color:#ff6000\">Galeri</strong> hesabý ile sepete ekleme yapamazsýnýz!<br><br>Lütfen bireysel hesabýnýz ile giriþ yapýnýz! veya Bireysel hesap oluþturunuz.");
        }
        else if (data == "OK") {

            $(".sepeteklendidivgoster").fadeIn(300).delay(1500).fadeOut(400);
            HeaderSepetListele();
            HeaderSepetAdet();
            MesajAdetListesi();

        };
    });
}



function Sikayet(AsvaltID, AsvaltT) {

    var SikayetTuru = $("#SikayetTuru");
    var SikayetMesaj = $("#SikayetMesaj");

    if (SikayetTuru.val() == "") { Popup("Arayanbuldu", "Lütfen þikayet nedeninizi belirtiniz!"); return false; }
    if (SikayetMesaj.val() == "") { Popup("Arayanbuldu", "Þikayetiniz ile ilgili açýklamanýzý yazýnýz..."); return false; }
    $.ajax({
        type: "POST",
        data: "SikayetTuru=" + escape(SikayetTuru.val()) + "&SikayetMesaj=" + escape(SikayetMesaj.val()) + "&AsvaltID=" + AsvaltID + "&AsvaltT=" + AsvaltT,
        url: "/sikayetform/",
        cache: false,
        success: function (data) {
            if (data == "OK") {
                Popup("Arayanbuldu", "Teþekkürler, mesajýnýz tarafýmýza ulaþmýþtýr");
                $("#SikayetTuru").val("");
                $("#SikayetMesaj").val("");
                $(".popupcem").hide();

            }
            else if (data == "ER") {
                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
            }
            else if(data == "ER1") {
                Popup("Arayanbuldu", "Geçerli Bir Ýlan Bulunamadý!");
            }
            else if (data == "ER2") {
                Popup("Arayanbuldu", "Kayýt sýrasýnda bir hata oluþtu! Lütfen daha sonra tekrar deneyiniz");
            };
        }
    });
}


function SepetVarTekEkleAdetGetir() {
    var SepetVarTekEkle = $("#SepetVarTekEkle");
    if (SepetVarTekEkle.val() == "") { return false; }


    $.post("/tektipadetgetir/?SepetVarTekEkle=" + SepetVarTekEkle.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#Tektipadetdiv').html(data);
        };
    });
}


function SepetVarCiftEkleAdetGetir() {
    var SepetVarCiftEkle = $("#SepetVarCiftEkle");
    if (SepetVarCiftEkle.val() == "") { return false; }


    $.post("/cifttipadetgetir/?SepetVarCiftEkle=" + SepetVarCiftEkle.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#Cifttipadetdiv').html(data);
        };
    });
}


function SepetVarTekEkleFiyat() {
    var SepetVarTekEkle = $("#SepetVarTekEkle");
    if (SepetVarTekEkle.val() == "") { return false; }


    $.post("/urunfiyatdegistir/?SepetVarTekEkle=" + SepetVarTekEkle.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('.Fiyatguncelle').html(data);
        };
    });
}

function SepetVarCiftEkleFiyat() {
    var AltVaryantSecim = $("#AltVaryantSecim");
    if (AltVaryantSecim.val() == "") { return false; }


    $.post("/urunfiyatdegistir/?SepetVarTekEkle=" + AltVaryantSecim.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('.Fiyatguncelle').html(data);
        };
    });
}


function CiftAdetGetir() {
    var AltVaryantSecim = $("#AltVaryantSecim");
    if (AltVaryantSecim.val() == "") { return false; }


    $.post("/altvaryantadetgetir/?AltVaryantSecim=" + AltVaryantSecim.val(), function (data) {
        if (data == "ER") {

            Popup("Arayanbuldu", "Listeleme Sýrasýnda Hata Algýlandý");
        }
        else {
            $('#altvaryantadetdiv').html(data);
        };
    });
}

function SepetEkle1(SUrunID) {

    var SepetVarTekEkle = $("#SepetVarTekEkle");
    var SepetVarTekAdetEkle = $("#SepetVarTekAdetEkle");

    if (SepetVarTekEkle.val() == "") { Popup("Arayanbuldu", "Lütfen özellik seçiniz!"); return false; }
    if (SepetVarTekAdetEkle.val() == "") { Popup("Arayanbuldu", "Lütfen adet giriniz..."); return false; }
    $.ajax({
        type: "POST",
        data: "SepetVarTekEkle=" + escape(SepetVarTekEkle.val()) + "&SepetVarTekAdetEkle=" + escape(SepetVarTekAdetEkle.val()) + "&SUrunID=" + SUrunID,
        url: "/sepeteekle1/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                //Popup("Arayanbuldu", "Teþekkürler, ürün sepetinize eklenmiþtir");
                $("#SepetVarTekEkle").val("");
                $("#SepetVarTekAdetEkle").val("1");
                HeaderSepetListele();
                HeaderSepetAdet();
                MesajAdetListesi();
                $("#HeaderSepet").css({ display: "block" });
                $('html').click(function () {
                    $("#HeaderSepet").css({ 'display': '' });

                }); 
                $(".sepeteklendidivgoster").delay(0).fadeIn();
                $('.sepeteklendidivgoster').delay(2000).fadeOut('slow');
            }
            else if (data == "ER0") {
                Popup("Arayanbuldu", "Hatalý Ýþlem");
            }
            else if (data == "ER1") {
                Popup("Arayanbuldu", "Üzgünüz, belirtilen ürün bulunamadý veya yayýndan kaldýrýldý!");
            }
            else if (data == "ER2") {
                Popup("Arayanbuldu", "Ýlginize teþekkür ederiz, Bu ürünün özelliðe ait stoðu tükenmiþtir.");
            }
            else if(data == "ER3") {
                Popup("Arayanbuldu", "Üzgünüz, belirtilen varyant bulunamadý veya yayýndan kaldýrýldý!");
            }
            else {
                Popup("Arayanbuldu", data);
            }
        }
    });
}




function SepetEkle2(CiUrunID) {

    var SepetVarCiftEkle = $("#SepetVarCiftEkle");
    var AltVaryantSecim = $("#AltVaryantSecim");
    var SptCiftEkle = $("#SptCiftEkle");

    if (SepetVarCiftEkle.val() == "") { Popup("Arayanbuldu", "Lütfen özellik seçiniz!"); return false; }
    if (AltVaryantSecim.val() == "") { Popup("Arayanbuldu", "Lütfen özelliðe ait seçenek seçiniz!"); return false; }
    if (SptCiftEkle.val() == "") { Popup("Arayanbuldu", "Lütfen adet giriniz..."); return false; }
    $.ajax({
        type: "POST",
        data: "SepetVarCiftEkle=" + escape(SepetVarCiftEkle.val()) + "&AltVaryantSecim=" + escape(AltVaryantSecim.val()) + "&SptCiftEkle=" + escape(SptCiftEkle.val()) + "&SUrunID=" + CiUrunID,
        url: "/sepeteekle2/",
        cache: false,
        success: function (data) {
            //Popup("Arayanbuldu", data);
            //return false;
            if (data == "OK") {
                //Popup("Arayanbuldu", "Teþekkürler, ürün sepetinize eklenmiþtir");
                $("#SepetVarCiftEkle").val("");
                $("#AltVaryantSecim").val("");
                $("#SptCiftEkle").val("1");
                HeaderSepetListele();
                HeaderSepetAdet();
                MesajAdetListesi();
                $("#HeaderSepet").css({ display: "block" });
                $('html').click(function () {
                    $("#HeaderSepet").css({ 'display': '' });

                });
                $(".sepeteklendidivgoster").delay(0).fadeIn();
                $('.sepeteklendidivgoster').delay(2000).fadeOut('slow');

            }
            else if (data == "ER0") {
                Popup("Arayanbuldu", "Hatalý Ýþlem");
            }
            else if (data == "ER1") {
                Popup("Arayanbuldu", "Üzgünüz, belirtilen ürün bulunamadý veya yayýndan kaldýrýldý!");
            }
            else if (data == "ER2") {
                Popup("Arayanbuldu", "Ýlginize teþekkür ederiz, Bu ürünün özelliðe ait stoðu tükenmiþtir.");
            }
            else if (data == "ER3") {
                Popup("Arayanbuldu", "Üzgünüz, belirtilen varyant bulunamadý veya yayýndan kaldýrýldý!");
            }
            else {
                Popup("Arayanbuldu", data);
            }
        }
    });
}


function SepetEkle3(NrunID) {

    var NormalAdet = $("#NormalAdet");

    if (NormalAdet.val() == "") { Popup("Arayanbuldu", "Lütfen adet giriniz..."); return false; }
    $.ajax({
        type: "POST",
        data: "NormalAdet=" + escape(NormalAdet.val()) + "&SUrunID=" + NrunID,
        url: "/sepeteekle3/",
        cache: false,
        success: function (data) {
  
            if (data == "OK") {
                //Popup("Arayanbuldu", "Teþekkürler, ürün sepetinize eklenmiþtir");
                $("#NormalAdet").val("1");
                HeaderSepetListele();
                HeaderSepetAdet();
                MesajAdetListesi();
                $("#HeaderSepet").css({ display: "block" });
                $('html').click(function () {
                    $("#HeaderSepet").css({ 'display': '' });

                });
                $(".sepeteklendidivgoster").delay(0).fadeIn();
                $('.sepeteklendidivgoster').delay(2000).fadeOut('slow');
            }
            else if (data == "ER0") {
                Popup("Arayanbuldu", "Hatalý Ýþlem");
            }
            else if (data == "ER1") {
                Popup("Arayanbuldu", "Üzgünüz, belirtilen ürün bulunamadý veya yayýndan kaldýrýldý!");
            }
            else if (data == "ER2") {
                Popup("Arayanbuldu", "Ýlginize teþekkür ederiz, Bu ürünün stoðu tükenmiþtir.");
            }

        }
    });
}

function adresSec(id) {
    $("#kontrol_teslimat").val(id);
}
function adresSec2(id) {
    $("#kontrol_fatura").val(id);
}


function SepetAdresDuzenleUpdate(SptAdrID) {

    var fldAdresBaslik = $('#fldAdresBaslik');
    var fldAdSoyad = $('#fldAdSoyad');
    var fldTCKN = $('#fldTCKN');
    var fldFaturaTip = $('#fldFaturaTip');
    var fldSehirID = $('#fldSehirID');
    var fldIlceID = $('#fldIlceID');
    var fldMahalleID = $('#fldMahalleID');
    var fldAdres = $('#fldAdres');
    var fldPostaKodu = $('#fldPostaKodu');
    var fldTelefon = $('#fldTelefon');
    var fldUnvan = $('#fldUnvan');
    var fldVergiDaire = $('#fldVergiDaire');
    var fldVergiNo = $('#fldVergiNo');



    if (fldAdresBaslik.val() == "") { Popup("Arayanbuldu", "Lütfen adres baþlýðýný boþ býrakmayýnýz."); return false; }
    if (fldAdSoyad.val() == "") { Popup("Arayanbuldu", "Lütfen adýnýzý soyadýnýzý boþ býrakmayýnýz."); return false; }
    if (fldTCKN.val() == "") { Popup("Arayanbuldu", "Lütfen TC Kimlik numaranýzý boþ býrakmayýnýz."); return false; }
    if (fldFaturaTip.val() == "") { Popup("Arayanbuldu", "Lütfen fatura tipi seçiniz."); return false; }
    if (fldSehirID.val() == "") { Popup("Arayanbuldu", "Lütfen þehir seçiniz."); return false; }
    if (fldIlceID.val() == "") { Popup("Arayanbuldu", "Lütfen ilçe seçiniz."); return false; }
    if (fldMahalleID.val() == "") { Popup("Arayanbuldu", "Lütfen mahalle seçiniz."); return false; }
    if (fldAdres.val() == "") { Popup("Arayanbuldu", "Lütfen adresinizi boþ býrakmayýnýz."); return false; }
    if (fldPostaKodu.val() == "") { Popup("Arayanbuldu", "Lütfen posta kodunu boþ býrakmayýnýz."); return false; }
    if (fldTelefon.val() == "") { Popup("Arayanbuldu", "Lütfen telefon numarasýný boþ býrakmayýnýz."); return false; }


    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "fldAdresBaslik=" + escape(fldAdresBaslik.val()) + "&fldAdSoyad=" + escape(fldAdSoyad.val()) + "&fldTCKN=" + escape(fldTCKN.val()) + "&fldFaturaTip=" + escape(fldFaturaTip.val()) + "&fldSehirID=" + escape(fldSehirID.val()) + "&fldIlceID=" + escape(fldIlceID.val()) + "&fldMahalleID=" + escape(fldMahalleID.val()) + "&fldAdres=" + escape(fldAdres.val()) + "&fldPostaKodu=" + escape(fldPostaKodu.val()) + "&fldTelefon=" + escape(fldTelefon.val()) + "&fldUnvan=" + escape(fldUnvan.val()) + "&fldVergiNo=" + escape(fldVergiNo.val()) + "&fldVergiDaire=" + escape(fldVergiDaire.val()) + "&SptAdrID=" + SptAdrID,
        url: "/sepet-adresduzenleupdate/",
        cache: false,
        success: function (data) {

            if (data == "OK") {
                Popup("Arayanbuldu", "Düzenleme Ýþleminiz Baþarýyla Gerçekleþmiþtir.");
                setTimeout(function () { window.location.reload(true); }, 1000);
            }

            else if (data == "ER0") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }

        }
    });

}


function SepetOdemeGec() {

    var kontrol_teslimat = $('#kontrol_teslimat');
    var kontrol_fatura = $('#kontrol_fatura');



    if (kontrol_teslimat.val() == "") { Popup("Arayanbuldu", "Lütfen teslimat adresi seçiniz."); return false; }
    if (kontrol_fatura.val() == "") { Popup("Arayanbuldu", "Lütfen fatura adresi seçiniz."); return false; }


    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "kontrol_teslimat=" + escape(kontrol_teslimat.val()) + "&kontrol_fatura=" + escape(kontrol_fatura.val()),
        url: "/odeme-gec/",
        cache: false,
        success: function (data) {

            if (data == "ER") {
                Popup("Arayanbuldu", "Hata Algýlandý");
            }

            else
            {
                window.location.href = "/odeme/?T=" + escape(kontrol_teslimat.val()) + "@F=" + escape(kontrol_fatura.val());
            }

        }
    });

}



function IadeOlusturma(IadeID,SipID) {

    var IadeAdet = $('#IadeAdet');
    var IadeBaslik = $('#IadeBaslik');
    var IadeAciklama = $('#IadeAciklama');

    if (IadeAdet.val() == "") { Popup("Arayanbuldu", "Lütfen adet seçiniz."); return false; }
    if (IadeBaslik.val() == "") { Popup("Arayanbuldu", "Lütfen Ýade nedeni seçiniz."); return false; }

    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "IadeAdet=" + escape(IadeAdet.val()) + "&IadeBaslik=" + escape(IadeBaslik.val()) + "&IadeAciklama=" + escape(IadeAciklama.val()) + "&IadeID=" + IadeID + "&SipID=" + SipID,
        url: "/iadetalebikayit/",
        cache: false,
        success: function (data) {

            if (data == "ER0") {
                Popup("Arayanbuldu", "Lütfen Tüm Alanlarý Eksiksiz Doldurun !");
                
            }
            else if (data == "ER1") {

                Popup("Arayanbuldu", "Ýade Talebiniz Þuan oluþturulamadý,<br>Sipariþiniz Teslim edildikten sonra iade talebi oluþturabilirsiniz,<br>veya açýkta þuan devam eden iade talebiniz vardýr. <br>Lütfen detaylý bilgi için çözüm merkezi ile iletiþime geçiniz!");
            }
            else if (data == "ER2") {

                Popup("Arayanbuldu", "Hata Algýlandý Lütfen çözüm merkezi ile iletiþime geçiniz!");
            }
            else if (data == "ER3") {

                Popup("Arayanbuldu", "Ýade Talebinde Hata Algýlandý Lütfen çözüm merkezi ile iletiþime geçiniz!");
            }

            else if (data == "OK") {

                Popup("Arayanbuldu", "Barkod Oluþturulmuþtur. Lütfen ilgili sipariþi size oluþturulan Barkod ile kargo firmasýna teslim ediniz.");
                window.location.href = "/iadetabeli-olusturuldu/" + SipID;
            }
            else {
                Popup("Arayanbuldu", data);
            }

        }
    });

}

function SaticiSiparisIptalEtme(SaticiIadeID) {

    var SaticifldIadeBaslik = $('#SaticifldIadeBaslik');
    var SaticifldIadeAciklama = $('#SaticifldIadeAciklama');



    if (SaticifldIadeBaslik.val() == "") { Popup("Arayanbuldu", "Lütfen Ýptal Etme Sebebi Seçiniz."); return false; }
    if (SaticifldIadeAciklama.val() == "") { Popup("Arayanbuldu", "Lütfen Ýptal Etme Açýklamasý Yazýnýz."); return false; }


    $.ajax({
        type: "POST",
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        data: "SaticifldIadeAciklama=" + escape(SaticifldIadeAciklama.val()) + "&SaticifldIadeBaslik=" + escape(SaticifldIadeBaslik.val()) + "&SaticiIadeID=" + SaticiIadeID,
        url: "/saticiiadetalebikayit/",
        cache: false,
        success: function (data) {


            if (data == "ER0") {
                Popup("Arayanbuldu", "Lütfen Tüm Alanlarý Eksiksiz Doldurun !");

            }
            else if (data == "ER1") {

                Popup("Arayanbuldu", "Size Ait Olmayan Bir Kaydý Ýptal Etmeye Çalýþýyorsunuz!");
            }
            else if (data == "ER2") {

                Popup("Arayanbuldu", "Hata Algýlandý Lütfen çözüm merkezi ile iletiþime geçiniz!");
            }
            else {
                window.location.reload(true);
            }

        }
    });

}

function KartTaksitGetir2(CardNumberTypex) {

    if (CardNumberTypex.length > 6) {
        $.post("/taksit-odemeekrani/" + CardNumberTypex, function (data) {
            if (data == "ER") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }
            else {
                $('#TaksitTable').html(data);
            };
        });
    }
}

function KartTaksitGetir(CardNumberType) {

    if (CardNumberType.length > 6) {
        $.post("/taksit-yap/" + CardNumberType, function (data) {
            if (data == "ER") {

                Popup("Arayanbuldu", "Hata Algýlandý");
            }
            else {
                $('#TaksitDiv').html(data);
            };
        });
    }
}















jQuery(function ($) {


    $(".leftmenu1").click(function () {
        $("#leftmenu2open").slideUp("fast");
        $("#leftmenu3open").slideUp("fast");
        $('.active').removeClass('active');
        $("#leftmenu1open").slideToggle("slow");
        $(this).toggleClass("active");
        return false;
    });

    $(".leftmenu2").click(function () {
        $("#leftmenu1open").slideUp("fast");
        $("#leftmenu3open").slideUp("fast");
        $('.active').removeClass('active');
        $("#leftmenu2open").slideToggle("slow");
        $(this).toggleClass("active");
        return false;
    });

    $(".leftmenu3").click(function () {
        $("#leftmenu1open").slideUp("fast");
        $("#leftmenu2open").slideUp("fast");
        $('.active').removeClass('active');
        $("#leftmenu3open").slideToggle("slow");
        $(this).toggleClass("active");
        return false;
    });


    $(".aracmenu1").click(function () {
        $("#aracmenu2open").slideUp("fast");
        $("#aracmenu3open").slideUp("fast");
        $("#aracmenu4open").slideUp("fast");
        $("#aracmenu5open").slideUp("fast");
        $('.active').removeClass('active');
        $("#aracmenu1open").slideToggle("slow");
        $(this).toggleClass("active");
        return false;
    });

    $(".aracmenu2").click(function () {
        $("#aracmenu1open").slideUp("fast");
        $("#aracmenu3open").slideUp("fast");
        $("#aracmenu4open").slideUp("fast");
        $("#aracmenu5open").slideUp("fast");
        $('.active').removeClass('active');
        $("#aracmenu2open").slideToggle("slow");
        $(this).toggleClass("active");
        return false;
    });

    $(".aracmenu3").click(function () {
        $("#aracmenu1open").slideUp("fast");
        $("#aracmenu2open").slideUp("fast");
        $("#aracmenu4open").slideUp("fast");
        $("#aracmenu5open").slideUp("fast");
        $('.active').removeClass('active');
        $("#aracmenu3open").slideToggle("slow");
        $(this).toggleClass("active");
        return false;
    });

    $(".aracmenu4").click(function () {
        $("#aracmenu1open").slideUp("fast");
        $("#aracmenu2open").slideUp("fast");
        $("#aracmenu3open").slideUp("fast");
        $("#aracmenu5open").slideUp("fast");
        $('.active').removeClass('active');
        $("#aracmenu4open").slideToggle("slow");
        $(this).toggleClass("active");
        return false;
    });


    $(".aracmenu5").click(function () {
        $("#aracmenu1open").slideUp("fast");
        $("#aracmenu2open").slideUp("fast");
        $("#aracmenu3open").slideUp("fast");
        $("#aracmenu4open").slideUp("fast");
        $('.active').removeClass('active');
        $("#aracmenu5open").slideToggle("slow");
        $(this).toggleClass("active");
        return false;
    });

    $("#fldFaturaTip").change(function () {
        $('div.adrestipsec').hide();
        $('div.adrestipsec.' + $(this).val()).show();
    });


    $("#AdresEkle").submit(function () {

        if ($("#fldFaturaTip").val() == "") {
            Popup("Arayanbuldu", "Lütfen Fatura Türü Boþ Geçmeyiniz!");
            return false;
        }

        if ($("#fldFaturaTip").val() == 2) {
            if ($("#fldUnvan").val() == "") { Popup("Arayanbuldu", "Lütfen Ünvan yazýnýz."); return false; }
            if ($("#fldVergiNo").val() == "") { Popup("Arayanbuldu", "Lütfen vergi no yazýnýz."); return false; }
            if ($("#fldVergiDaire").val() == "") { Popup("Arayanbuldu", "Lütfen vergi dairesi yazýnýz."); return false; }
        }

        return true;
    });


    $("#FaturaBtn").click(function (e) {
        var fldUnvan = $('#fldUnvan');
        var fldMersis = $('#fldMersis');
        var fldVergiNo = $('#fldVergiNo');
        var fldVergiDaire = $('#fldVergiDaire');
        var fldKEP = $('#fldKEP');
        var fldAdres = $('#fldAdres');
        var MfldSehirID = $('#MfldSehirID');
        var MfldIlceID = $('#MfldIlceID');
        var MfldMahalleID = $('#MfldMahalleID');
        var fldTelefon = $('#fldTelefon');

        if (fldUnvan.val() == "") { Popup("Arayanbuldu", "Lütfen Ünvan yazýnýz."); return false; }
        if (fldMersis.val() == "") { Popup("Arayanbuldu", "Lütfen Mersis Numaranýzý yazýnýz."); return false; }
        if (fldVergiNo.val() == "") { Popup("Arayanbuldu", "Lütfen Vergi Numaranýzý yazýnýz."); return false; }
        if (fldVergiDaire.val() == "") { Popup("Arayanbuldu", "Lütfen Vergi Dairenizi yazýnýz."); return false; }
        if (fldKEP.val() == "") { Popup("Arayanbuldu", "Lütfen Kayýtlý Elektronik Posta Adresi (KEP) Numaranýzý yazýnýz."); return false; }
        if (fldAdres.val() == "") { Popup("Arayanbuldu", "Lütfen Adresinizi yazýnýz."); return false; }
        if (MfldSehirID.val() == "") { Popup("Arayanbuldu", "Lütfen Þehir seçiniz."); return false; }
        if (MfldIlceID.val() == "") { Popup("Arayanbuldu", "Lütfen Ýlçe seçiniz."); return false; }
        if (MfldMahalleID.val() == "") { Popup("Arayanbuldu", "Lütfen Mahalle seçiniz."); return false; }
        if (fldTelefon.val() == "") { Popup("Arayanbuldu", "Lütfen Telefon yazýnýz."); return false; }

        $("#KurumsalForm").submit();
    });

    $("#BireyselBtn").click(function (e) {
        var BfldAdSoyad = $('#BfldAdSoyad');
        var BfldTCKN = $('#BfldTCKN');
        var BfldVergiNo = $('#BfldVergiNo');
        var BfldVergiDaire = $('#BfldVergiDaire');
        var BfldAdres = $('#BfldAdres');
        var BfldSehirID = $('#BfldSehirID');
        var BfldIlceID = $('#BfldIlceID');
        var BfldMahalleID = $('#BfldMahalleID');
        var BfldTelefon = $('#BfldTelefon');

        if (BfldAdSoyad.val() == "") { Popup("Arayanbuldu", "Lütfen Adýnýzý Soyadýnýzý yazýnýz."); return false; }
        if (BfldTCKN.val() == "") { Popup("Arayanbuldu", "Lütfen TC Kimlik Numaranýzý yazýnýz."); return false; }
        if (BfldVergiNo.val() == "") { Popup("Arayanbuldu", "Lütfen Vergi Numaranýzý yazýnýz."); return false; }
        if (BfldVergiDaire.val() == "") { Popup("Arayanbuldu", "Lütfen Vergi Dairenizi yazýnýz."); return false; }
        if (BfldAdres.val() == "") { Popup("Arayanbuldu", "Lütfen Adres yazýnýz."); return false; }
        if (BfldSehirID.val() == "") { Popup("Arayanbuldu", "Lütfen Þehir seçiniz."); return false; }
        if (BfldIlceID.val() == "") { Popup("Arayanbuldu", "Lütfen Ýlçe seçiniz."); return false; }
        if (BfldMahalleID.val() == "") { Popup("Arayanbuldu", "Lütfen Mahalle seçiniz."); return false; }
        if (BfldTelefon.val() == "") { Popup("Arayanbuldu", "Lütfen Telefon yazýnýz."); return false; }
        $("#BireyselForm").submit();
    });

    $(".bankaekle").click(function (e) {
        e.preventDefault();
        var aid = $(this).attr("href");
        $('html,body').animate({ scrollTop: $(aid).offset().top }, 'slow');
    });


    $(".sdjfvn a").on('click', function (e) {
        var btnContentId = $(this).attr('id');
        $('#ButtonSecim').val(btnContentId);

        var ButtonSecim = $('#ButtonSecim');
        var sec         = $('.sec');
        if (ButtonSecim.val() == "") { Popup("Arayanbuldu", "Lütfen Ýþlem Tipini Seçiniz."); return false; }
        if (sec.val() == "") { Popup("Arayanbuldu", "Lütfen Ýþlem Yapmak Ýstediðiniz Ürünleri Seçiniz."); return false; }


        if (ButtonSecim.val() == "reklam") {
            var gelendugme = "Seçtiðiniz ürünlere reklam paketi eklenecektir,"
        }
        if (ButtonSecim.val() == "bitir") {
            var gelendugme = "Seçtiðiniz ürünlere yayýndan kaldýrýlacaktýr,"
        }

        if (ButtonSecim.val() == "kopyala")
        {
            var gelendugme = "Seçtiðiniz ürünlerin aynýsýndan oluþturulacaktýr,"
        }
        if (ButtonSecim.val() == "urunsil")
        {
            var gelendugme = "Seçtiðiniz ürünlerin silinenlere taþýnacaktýr,"
        }

        if ($('input[name="sec"]').is(':checked'))
        {
            if (ButtonSecim.val() == "kopyala")
            { 
                var count = $("[name='sec']:checked").length;
                if (count == 1)
                {
                    if (confirm(gelendugme + " Ýþlem yapmak istediðinizden emin misiniz?")) {
                        $("#UrunIslemForm").submit();
                    }
                    else { return false; }
                }
                else
                {
                    { Popup("Arayanbuldu", "Birden fazla ürün kopyalama iþlemi yapamazsýnýz lütfen 1 adet seçip devam ediniz!"); return false; }
                }
            }
            else {
                if (confirm(gelendugme + " Ýþlem yapmak istediðinizden emin misiniz?")) {
                    $("#UrunIslemForm").submit();
                }
                else { return false; }
            }
        }
        else
        {
            { Popup("Arayanbuldu", "Lütfen Ýþlem Yapmak Ýstediðiniz Ürünleri Seçiniz."); return false; }
        }
        
    });

    $("#Banaulassin1").on("click", function () {
        $("#Banaulassin1").removeClass();
        $("#Banaulassin2").removeClass("kargos");
        $("#Banaulassin1").addClass("button-satici-oder w-button");
        $("#Banaulassin2").addClass("button-kapida-oder w-button");
        $(".div-block-iletisim-tel").css("display", "block")
        $(".div-block-iletisim-sms").css("display", "none")
        $("#PrdfldAracBanaNasilUlassin").val("");
        $("#PrdfldAracBanaNasilUlassin").val("1");
        $("#Banaulassin1").css("float", "left")
    });


    $("#Banaulassin2").on("click", function () {
        $("#Banaulassin2").removeClass();
        $("#Banaulassin1").removeClass("kargos");
        $("#Banaulassin2").addClass("button-satici-oder w-button");
        $("#Banaulassin1").addClass("button-kapida-oder w-button");
        $(".div-block-iletisim-sms").css("display", "block")
        $(".div-block-iletisim-tel").css("display", "none")
        $("#PrdfldAracBanaNasilUlassin").val("");
        $("#PrdfldAracBanaNasilUlassin").val("2");
        $("#Banaulassin2").css("float", "right")
    });

    $("#KargoSecim1").on("click", function () {
        $("#KargoSecim1").removeClass();
        $("#KargoSecim2").removeClass("kargos");
        $("#KargoSecim1").addClass("button-satici-oder w-button");
        $("#KargoSecim2").addClass("button-kapida-oder w-button");
        $("#KargoAktifDiv").css("display", "block")
        $("#KargoSecim2Div").css("display", "none")
        $("#KargoSecim1").css("float", "left")
        $("#KargoKimOder").val("");
        $("#KargoKimOder").val("1");
    });

    $("#KargoSecim2").on("click", function () {
        $("#KargoSecim2").removeClass();
        $("#KargoSecim1").removeClass("kargos");
        $("#KargoSecim2").addClass("button-satici-oder w-button");
        $("#KargoSecim1").addClass("button-kapida-oder w-button");
        $("#KargoAktifDiv").css("display", "block")
        $("#KargoSecim2Div").css("display", "block")
        $("#KargoSecim2").css("float", "right")
        $("#KargoKimOder").val("");
        $("#KargoKimOder").val("2");
    });


    $("#KargoteslimSure1").on("click", function () {
        $("#KargoteslimSure1").removeClass();
        $("#KargoteslimSure2").removeClass("kargos");
        $("#KargoteslimSure3").removeClass("kargos");
        $("#KargoteslimSure1").addClass("button-kapida-ertesigun  w-button");
        $("#KargoteslimSure2").addClass("button-aynigun w-button");
        $("#KargoteslimSure3").addClass("button-aynigun w-button");
        $("#AyniGunSecim").css("display", "block")
        $("#KargoteslimSure1").css("float", "left")
        $("#KargoTeslimSuresi").val("");
        $("#KargoTeslimSuresi").val("1");
    });


    $("#KargoteslimSure2").on("click", function () {
        $("#KargoteslimSure2").removeClass();
        $("#KargoteslimSure1").removeClass("kargos");
        $("#KargoteslimSure3").removeClass("kargos");
        $("#KargoteslimSure2").addClass("button-kapida-ertesigun  w-button");
        $("#KargoteslimSure1").addClass("button-aynigun w-button");
        $("#KargoteslimSure3").addClass("button-aynigun w-button");
        $("#AyniGunSecim").css("display", "none")
        $("#KargoTeslimSuresi").val("");
        $("#KargoTeslimSuresi").val("2");
    });

    $("#KargoteslimSure3").on("click", function () {
        $("#KargoteslimSure3").removeClass();
        $("#KargoteslimSure1").removeClass("kargos");
        $("#KargoteslimSure2").removeClass("kargos");
        $("#KargoteslimSure3").addClass("button-kapida-ertesigun  w-button");
        $("#KargoteslimSure1").addClass("button-aynigun w-button");
        $("#KargoteslimSure2").addClass("button-aynigun w-button");
        $("#AyniGunSecim").css("display", "none")
        $("#KargoteslimSure3").css("float", "right")
        $("#KargoTeslimSuresi").val("");
        $("#KargoTeslimSuresi").val("3");
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 330) {
            $('.sticky-header').addClass('fixedsepet');
        }
        else {
            $('.sticky-header').removeClass('fixedsepet');
        }
    });

    HeaderSepetListele();
    HeaderSepetAdet();
    MesajAdetListesi();
    SepetGuncelListesi();
});



