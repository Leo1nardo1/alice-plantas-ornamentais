document.addEventListener("DOMContentLoaded", () =>{
    renderProducts("all");
});

const todasBtn = document.getElementById("todasBtn");
const internaBtn = document.getElementById("internaBtn");
const externaBtn = document.getElementById("externaBtn");
const suculentaBtn = document.getElementById("suculentaBtn");
const aromaticaBtn = document.getElementById("aromaticaBtn");

const products = [
  {
    name: "Monstera Deliciosa",
    scientific: "Monstera deliciosa",
    price: "R$ 85,00",
    image: "https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=400&h=280&fit=crop",
    care: [
      { icon: 'fas fa-sun', title: 'Luz indireta' },
      { icon: 'fas fa-tint', title: 'Rega moderada' },
      { icon: 'fas fa-heart', title: 'Fácil cuidado' }
    ],
    category: "interna",
    badge: "Destaque",
    featured: true
  },
{
  name: "Ficus Lyrata",
  scientific: "Ficus lyrata",
  price: "R$ 120,00",
  image: "https://images.unsplash.com/photo-1587307351648-dc6c2f5e5d92?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-star', title: 'Cuidado intermediário' },
    { icon: 'fas fa-cloud', title: 'Luz indireta' },
    { icon: 'fas fa-wind', title: 'Purifica o ar' }
  ],
  category: "externa",
  featured: true
},
{
  name: "Espada de São Jorge",
  scientific: "Sansevieria trifasciata",
  price: "R$ 40,00",
  image: "https://images.unsplash.com/photo-1616627981381-51c87826b1b0?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-moon', title: 'Pouca luz' },
    { icon: 'fas fa-smile', title: 'Muito fácil' },
    { icon: 'fas fa-wind', title: 'Purifica o ar' }
  ],
  category: "suculenta",
  featured: true
},
{
  name: "Samambaia Boston",
  scientific: "Nephrolepis exaltata",
  price: "R$ 35,00",
  image: "https://images.unsplash.com/photo-1616627211941-284a42c9a0a5?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-cloud', title: 'Luz indireta' },
    { icon: 'fas fa-spa', title: 'Umidade alta' },
    { icon: 'fas fa-star', title: 'Cuidado intermediário' }
  ],
  category: "externa",
  featured: false
},
{
  name: "Pothos Dourado",
  scientific: "Epipremnum aureum",
  price: "R$ 28,00",
  image: "https://images.unsplash.com/photo-1627308595181-3f8b06f0ce5d?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-sun', title: 'Luz indireta' },
    { icon: 'fas fa-tint', title: 'Rega moderada' },
    { icon: 'fas fa-thumbs-up', title: 'Muito fácil' }
  ],
  category: "interna",
  featured: false
},
{
  name: "Zamioculca",
  scientific: "Zamioculcas zamiifolia",
  price: "R$ 55,00",
  image: "https://images.unsplash.com/photo-1584648058106-cf7bdfb48574?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-moon', title: 'Pouca luz' },
    { icon: 'fas fa-smile', title: 'Muito fácil' }
  ],
  category: "interna",
  featured: false
},
{
  name: "Lança de São Jorge",
  scientific: "Sansevieria cylindrica",
  price: "R$ 60,00",
  image: "https://images.unsplash.com/photo-1627308594989-ae6dc8d4a57b?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-star', title: 'Cuidado intermediário' },
    { icon: 'fas fa-tint', title: 'Rega moderada' }
  ],
  category: "externa",
  featured: false
},
{
  name: "Jiboia Verde",
  scientific: "Epipremnum pinnatum",
  price: "R$ 32,00",
  image: "https://images.unsplash.com/photo-1627308594911-0cd3b9680a83?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-cloud', title: 'Luz indireta' },
    { icon: 'fas fa-wind', title: 'Purifica o ar' },
    { icon: 'fas fa-heart', title: 'Fácil cuidado' }
  ],
  category: "interna",
  featured: false
},
{
  name: "Calatheia Orbifolia",
  scientific: "Goeppertia orbifolia",
  price: "R$ 70,00",
  image: "https://images.unsplash.com/photo-1616627546796-60efb5a1f7e5?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-spa', title: 'Umidade alta' },
    { icon: 'fas fa-star', title: 'Cuidado intermediário' }
  ],
  category: "aromatica",
  featured: true
},
{
  name: "Areca Bambu",
  scientific: "Dypsis lutescens",
  price: "R$ 95,00",
  image: "https://images.unsplash.com/photo-1626890790065-97c78553d395?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-wind', title: 'Purifica o ar' },
    { icon: 'fas fa-sun', title: 'Luz indireta' }
  ],
  category: "externa",
  badge: "Novo",
  featured: true
},
{
  name: "Peperômia",
  scientific: "Peperomia obtusifolia",
  price: "R$ 25,00",
  image: "https://images.unsplash.com/photo-1627308594672-3a96c3b03f9a?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-thumbs-up', title: 'Muito fácil' },
    { icon: 'fas fa-moon', title: 'Pouca luz' }
  ],
  category: "aromatica",
  featured: false
},
{
  name: "Suculenta Mix",
  scientific: "Vários tipos",
  price: "R$ 18,00",
  image: "https://images.unsplash.com/photo-1589927986089-35812388d1df?w=400&h=280&fit=crop",
  care: [
    { icon: 'fas fa-sun', title: 'Luz indireta' },
    { icon: 'fas fa-tint', title: 'Rega moderada' },
    { icon: 'fas fa-thumbs-up', title: 'Muito fácil' }
  ],
  category: "suculenta",
  featured: false
}
];

function renderProducts(category) {
  const container = document.getElementById("product-list");
  container.innerHTML = "";

  const filtered = products.filter(p => category === "all" ? p.featured : p.category === category);

  filtered.forEach(product => {
    const col = document.createElement("div");
    col.className = `col-lg-4 col-md-6 ${product.category}`;

    col.innerHTML = `
      <div class="product-card">
        ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ""}
        <div class="product-image">
            <img src="${product.image}" alt="${product.name}">
        </div>
        <div class="product-info">
            <div>
                <h3 class="product-name">${product.name}</h3>
                <p class="product-scientific">${product.scientific}</p>
                <div class="care-icons">
                    <div class="product-price">${product.price}</div>

                    ${product.care.map(care => `<div class="care-icon">
                                                  <i class="${care.icon}"></i>
                                                  <div class="tooltip">${care.title}</div>
                                                </div>`).join('')}
                </div>
            </div>
            <div>
                <a href="https://wa.me/5571993226906?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20os%20produtos" target="_blank" class="add-to-cart-btn w-100">
                    <i class="fas fa-shopping-cart me-2"></i>Solicitar pelo WhatsApp
                </a>
            </div>
        </div>
      </div>
    `;

    container.appendChild(col);
  });
}

function filterByCategory(category) {
    const categorySelected = products.filter(p => p.category === category);
    renderProducts(categorySelected);
}
function removeActiveState() {
    todasBtn.classList.remove('active');
    internaBtn.classList.remove('active');
    externaBtn.classList.remove('active');
    suculentaBtn.classList.remove('active');
    aromaticaBtn.classList.remove('active');
}
//botões
todasBtn.addEventListener('click', () => {
    renderProducts('all');
    removeActiveState();
    todasBtn.classList.add("active");
});

internaBtn.addEventListener('click', () => {
    renderProducts("interna");
    removeActiveState();
    internaBtn.classList.add("active");
});

externaBtn.addEventListener('click', () => {
    renderProducts("externa");
    removeActiveState();
    externaBtn.classList.add("active");
});

suculentaBtn.addEventListener('click', () => {
    renderProducts("suculenta");
    removeActiveState();
    suculentaBtn.classList.add("active");
});

aromaticaBtn.addEventListener('click', () => {
    renderProducts("aromatica");
    removeActiveState();
    aromaticaBtn.classList.add("active");
});