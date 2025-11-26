/* script.js - Client-side logic & Backend Bridge */

(function () {

  // === 1. NAVIGATION LINKS ===
  const goSignup = document.getElementById('go-signup');
  if (goSignup) {
    goSignup.addEventListener('click', () => {
      window.location.href = '/signup';
    });
  }

  // === 2. MENU PAGE ===
  const bundleButtons = document.querySelectorAll('[data-bundle]');
  if (bundleButtons && bundleButtons.length) {
    bundleButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const bundleKey = btn.getAttribute('data-bundle');
        localStorage.setItem('tabella_selected_bundle', bundleKey);
        location.href = '/reservation';
      });
    });
  }

  // === 3. RESERVATION PAGE ===
  const reservationForm = document.getElementById('reservation-form');
  if (reservationForm) {
    reservationForm.addEventListener('submit', (e) => {
      e.preventDefault(); 

      const selectedBundle = reservationForm.elements['bundle'].value;
      localStorage.setItem('tabella_selected_bundle', selectedBundle);

      const guestData = {
        guests: reservationForm.elements['guests'].value,
        preference: reservationForm.elements['preference'].value,
        notes: reservationForm.elements['notes'].value
      };

      const dateData = {
        date: reservationForm.elements['date'].value,
        time: reservationForm.elements['time'].value
      };

      const paymentData = reservationForm.elements['payment'].value;

      localStorage.setItem('tabella_reservation_form', JSON.stringify(guestData));
      localStorage.setItem('tabella_datetime', JSON.stringify(dateData));
      localStorage.setItem('tabella_payment', paymentData);

      location.href = '/summary';
    });
  }

  // === 4. SUMMARY PAGE (QR Logic Added Here) ===
  const populateSummary = () => {
    // Get data
    const bundle = localStorage.getItem('tabella_selected_bundle') || 'No bundle selected';
    const form = JSON.parse(localStorage.getItem('tabella_reservation_form') || '{}');
    const datetime = JSON.parse(localStorage.getItem('tabella_datetime') || '{}');
    const payment = localStorage.getItem('tabella_payment') || 'N/A';
    
    // A. Fill Visual Spans
    const elBundle = document.getElementById('summary-bundle');
    const elDate = document.getElementById('summary-date');
    const elTime = document.getElementById('summary-time');
    const elGuests = document.getElementById('summary-guests');
    const elPayment = document.getElementById('summary-payment');

    if (elBundle) elBundle.textContent = bundle.replaceAll('-', ' ');
    if (elDate) elDate.textContent = datetime.date || '';
    if (elTime) elTime.textContent = datetime.time || ''; 
    if (elGuests) elGuests.textContent = form.guests || '';
    if (elPayment) elPayment.textContent = payment;

    // === QR CODE LOGIC ===
    const qrSection = document.getElementById('qr-section');
    const qrImage = document.getElementById('qr-image');
    const qrMethodName = document.getElementById('qr-method-name');
    const qrRef = document.getElementById('qr-ref');

    // Check if Payment is NOT "Over the Counter"
    // "Counter" is the value we set in the <option value="Counter">
    if (payment !== 'Counter' && payment !== 'N/A') {
        if (qrSection) {
            qrSection.style.display = 'block'; // Show the QR section
            
            // Generate a random Reference Number (e.g., TAB-839201)
            const randomRef = 'TAB-' + Math.floor(100000 + Math.random() * 900000);
            
            // Set text
            if(qrRef) qrRef.textContent = randomRef;
            if(qrMethodName) qrMethodName.textContent = payment; // e.g. "PayPal"

            // Generate QR Code using a placeholder API (simulating a unique payment link)
            // We encode the Random Ref + Payment Method into the QR
            const qrData = encodeURIComponent(`Payment for ${payment} | Ref: ${randomRef} | Amount: Pending`);
            qrImage.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${qrData}`;
        }
    } else {
        // If it IS "Counter", ensure QR is hidden
        if (qrSection) qrSection.style.display = 'none';
    }

    // B. Fill Hidden Inputs (For Laravel Backend)
    if (document.getElementById('input-bundle')) {
        document.getElementById('input-bundle').value = bundle;
        document.getElementById('input-date').value = datetime.date;
        document.getElementById('input-time').value = datetime.time;
        document.getElementById('input-guests').value = form.guests;
        document.getElementById('input-preference').value = form.preference;
        document.getElementById('input-notes').value = form.notes;
        document.getElementById('input-payment').value = payment;
    }
  };

  if (document.getElementById('summary-bundle')) {
      populateSummary();
  }

  // === 5. MENU SELECTED OVERLAY TEXT ===
  const selectedBundleDisplay = document.getElementById('selected-bundle');
  if (selectedBundleDisplay) {
    const b = localStorage.getItem('tabella_selected_bundle');
    if (b) selectedBundleDisplay.textContent = b.replaceAll('-', ' ');
  }

})(); // end main IIFE

// === HELPER FUNCTION: TOGGLE PASSWORD ===
function togglePassword(inputId, icon) {
  const input = document.getElementById(inputId);
  if (input.type === "password") {
    input.type = "text";
  } else {
    input.type = "password";
  }
}

// === HOME PAGE CAROUSEL ===
document.addEventListener("DOMContentLoaded", () => {
  const bundles = [
    {
      title: "Bundle for Solo (₱499)",
      image: "images/solo.jpg",
      list: [ "Grilled Chicken Meal", "Spaghetti", "Chocolate Cake", "Iced Tea" ]
    },
    {
      title: "Bundle for 2 Persons (₱1,299)",
      image: "images/for2.jpg",
      list: [ "2 Beef Steaks", "Mashed Potatoes", "Salad", "Cake", "Wine/Tea" ]
    },
    {
      title: "Family Bundle – Tabella Feast (₱3,599)",
      image: "images/chicken.jpg",
      list: [ "Good for 4–6", "Chicken Platter", "Spaghetti", "Rice", "Salad", "Cake", "Tea" ]
    },
    {
      title: "Bundle for 10–12 Persons (₱8,999)",
      image: "images/for12.jpg",
      list: [ "2 Whole Chickens", "Large Spaghetti", "Large Rice", "Seafood", "Salad", "Whole Cake", "Fruits" ]
    }
  ];

  let current = 2; 
  const imgEl = document.querySelector("#bundle-image img");
  const titleEl = document.querySelector("#bundle-title");
  const listEl = document.querySelector("#bundle-list");
  const prevBtn = document.getElementById("prevBundle");
  const nextBtn = document.getElementById("nextBundle");
  const infoContainer = document.getElementById("bundle-info");

  function updateBundle(index) {
    const bundle = bundles[index];
    if (!imgEl || !titleEl || !listEl) return;

    imgEl.style.opacity = 0;
    infoContainer.style.opacity = 0;

    setTimeout(() => {
      imgEl.src = bundle.image;
      imgEl.alt = bundle.title;
      titleEl.textContent = bundle.title;
      listEl.innerHTML = bundle.list.map(item => `<li>${item}</li>`).join("");
      imgEl.style.opacity = 1;
      infoContainer.style.opacity = 1;
    }, 300);
  }

  if (prevBtn && nextBtn) {
    prevBtn.addEventListener("click", () => {
      current = (current - 1 + bundles.length) % bundles.length;
      updateBundle(current);
    });

    nextBtn.addEventListener("click", () => {
      current = (current + 1) % bundles.length;
      updateBundle(current);
    });
  }
});