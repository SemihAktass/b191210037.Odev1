 function isValid(frm)
            {
                var kadi = frm.kadi.value;
                var sifre = frm.sifre.value;
				if ( kadi==null || kadi==""){
					alert("Boş Bırakmayınız!");
					return false;
				}
                if ( !(kadi=="b191210037") )
                {
                    alert("Yanlış Kullanıcı");
                    return false;
                }
				if ( sifre==null || sifre==""){
					alert("Şifreyi Boş Bırakmayınız!");
					return false;
				}
                if ( !(sifre=="123"))
                {
                    alert("Şifre Yanlış");
                    return false;
                }

                return true;
            }