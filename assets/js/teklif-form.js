// assets/js/teklif-form.js - Ana Form Yönetimi

class TeklifFormManager {
    constructor() {
        this.currentFormType = '';
        this.init();
    }

    init() {
        this.setupFormEventListeners();
        this.setupInputValidations();
    }

    // Form olay dinleyicileri
    setupFormEventListeners() {
        // Form gönderim kontrolü
        const form = document.getElementById('mainForm');
        if (form) {
            form.addEventListener('submit', (e) => this.handleFormSubmit(e));
        }

        // Şasi No formatlama
        const sasiInput = document.querySelector('input[name="sasi_no"]');
        if (sasiInput) {
            sasiInput.addEventListener('input', (e) => this.formatSasiNo(e.target));
        }
    }

    // Input validasyonları
    setupInputValidations() {
        // TC No format kontrolü
        const tcInputs = document.querySelectorAll('input[name="tc_no"], input[name="devir_tc_no"]');
        tcInputs.forEach(input => {
            input.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
                if (e.target.value.length > 11) {
                    e.target.value = e.target.value.slice(0, 11);
                }
            });
        });

        // Telefon format kontrolü
        const telInputs = document.querySelectorAll('input[name="telefon"]');
        telInputs.forEach(input => {
            input.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
                if (e.target.value.length > 10) {
                    e.target.value = e.target.value.slice(0, 10);
                }
            });
        });
    }

    // Form gönderim işlemi
    handleFormSubmit(e) {
        const kvkkCheckbox = document.getElementById('kvkk');
        
        if (!kvkkCheckbox.checked) {
            e.preventDefault();
            alert('Lütfen KVKK Aydınlatma Metni\'ni okuyup kabul ediniz.');
            kvkkCheckbox.focus();
            return false;
        }
        
        if (!this.currentFormType) {
            e.preventDefault();
            alert('Lütfen önce bir sigorta türü seçiniz.');
            return false;
        }

        // Sıfır araç için ek kontroller
        if (this.currentFormType === 'sifirArac') {
            const sasiNo = document.querySelector('input[name="sasi_no"]');
            if (sasiNo && sasiNo.value.length !== 17) {
                e.preventDefault();
                alert('Şasi numarası 17 haneli olmalıdır.');
                sasiNo.focus();
                return false;
            }
        }

        // Buton durumunu güncelle
        const submitBtn = e.target.querySelector('button[type="submit"]');
        this.showLoadingState(submitBtn);
    }

    // Yükleme durumu
    showLoadingState(button) {
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> TEKLİF GÖNDERİLİYOR...';
        button.disabled = true;

        // 5 saniye sonra butonu eski haline getir (güvence için)
        setTimeout(() => {
            button.innerHTML = originalText;
            button.disabled = false;
        }, 5000);
    }

    // Şasi No formatlama
    formatSasiNo(input) {
        let value = input.value.toUpperCase().replace(/[^A-HJ-NPR-Z0-9]/g, '');
        
        if (value.length > 17) {
            value = value.slice(0, 17);
        }
        
        input.value = value;
        
        // Geçerlilik kontrolü
        if (value.length === 17) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
    }

    // Form göster/gizle
    showForm(formType) {
        this.currentFormType = formType;
        
        // Tüm formları gizle
        document.querySelectorAll('.form-section').forEach(form => {
            form.style.display = 'none';
        });
        
        // Seçilen formu göster
        const selectedForm = document.getElementById(formType + 'Form');
        if (selectedForm) {
            selectedForm.style.display = 'block';
        }
        
        // Form başlığını güncelle
        this.updateFormTitle(formType);
        document.getElementById('hiddenSigortaTuru').value = formType;
        
        // Form section'ı göster ve scroll yap
        this.showFormSection();
    }

    hideForm() {
        document.getElementById('formSection').style.display = 'none';
        this.currentFormType = '';
    }

    updateFormTitle(formType) {
        const titles = {
            'sifirArac': 'SIFIR ARAÇ SİGORTA TEKLİFİ',
            'sigortaYenileme': 'SİGORTA YENİLEME TEKLİFİ',
            'ikinciElArac': 'İKİNCİ EL ARAÇ SİGORTA DEVRİ'
        };
        
        const titleElement = document.getElementById('formTitle');
        if (titleElement) {
            titleElement.textContent = titles[formType] || 'SİGORTA TEKLİF FORMU';
        }
    }

    showFormSection() {
        const formSection = document.getElementById('formSection');
        if (formSection) {
            formSection.style.display = 'block';
            formSection.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
}

// Global instance
const teklifFormManager = new TeklifFormManager();

// Global fonksiyonlar (HTML'den erişim için)
function showForm(formType) {
    teklifFormManager.showForm(formType);
}

function hideForm() {
    teklifFormManager.hideForm();
}

function loadAracTipleri(marka) {
    carModelManager.loadAracTipleri(marka, 'arac_tipi');
}

function formatSasiNo(input) {
    teklifFormManager.formatSasiNo(input);
}