
    <style>
       
.testimonials-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: end;
  gap: 2rem;
  background-color: #fff;
  color: #333;
  border-radius: 15px;
  margin: 20px auto;
  padding: 7px 80px;
  width: 100%px;
  /* min-height: 430px; */
  position: relative;
}

.testimonials-container .stars {
  font-size: 14px;
}

.testimonials-container .testimonial {
  display: flex;
  align-items: center;
  text-align: center;
  font-weight: 500;
  height: 100%;
  line-height: 28px;
  margin: 0;
}

.testimonials-container .user {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.testimonials-container .user .user-image {
  border-radius: 50%;
  height: 50px;
  width: 50px;
  object-fit: cover;
}

.testimonials-container .user .user-details {
  text-align: center;
}

.testimonials-container .user .username {
  margin: 0;
  font-size: 14px;
}

.testimonials-container .user .role {
  margin: 0;
  font-size: 12px;
}

.testimonials-container .progress-dots {
  display: flex;
  gap: 5px;
}

.testimonials-container .progress-dot {
  width: 5px;
  height: 5px;
  background-color: #eee;
  border-radius: 50%;
}

.testimonials-container .progress-dot.active {
  background-color: #555;
}

.testimonials-container .btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #eee;
  font-size: 10px;
  cursor: pointer;
  transition: 0.1s ease;
}

.testimonials-container .btn:hover {
  background-color: #eee;
}

.testimonials-container #btn-prev {
  left: 25px;
}

.testimonials-container #btn-next {
  right: 25px;
}

    </style>
</head>
<body>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
 
 <div class="container">
 <div class="row">
    <div class="col-lg-12">
        <h2 class="text-center mhead" >REVIEWS & FEEDBACKS</h2>
        <div class="testimonials-container">
            <div class="btn" id="btn-prev"><i class="fa-solid fa-chevron-left"></i></div>
            <div class="btn" id="btn-next"><i class="fa-solid fa-chevron-right"></i></div>
           
            <p class="testimonial">
             I am very pleased with the re-design of my website by WEB KEY INDIA. It has been several years now that I did not feel connected with my previous website - it was cold and looked typical of other realty companies
            </p>
            
            <div class="user">
              <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="user" class="user-image" />
              <div class="user-details">
                <h4 class="username">Miyah Myles</h4>
                <p class="role">Marketing</p>
              </div>
            </div>
            <div class="progress-dots" id="progress-dots"></div>
          
          </div>
    </div>
    
</div>
 </div>
 

<script src="js/bootstrap.min.js"></script>
<script>
    const testimonialsContainer = document.querySelector(".testimonials-container");
const testimonial = document.querySelector(".testimonial");
const userImage = document.querySelector(".user-image");
const username = document.querySelector(".username");
const role = document.querySelector(".role");
const btnPrev = document.getElementById("btn-prev");
const btnNext = document.getElementById("btn-next");
const progressDots = document.getElementById("progress-dots");

const testimonials = [
  {
    name: "June Cha",
    position: "Software Engineer",
    photo: "https://randomuser.me/api/portraits/women/44.jpg",
    text:
      "When it comes to creating professional, attractive, and effective websites, there is no company that can surpass Web Key India. Thanks to their talent, our site has taken off in the search engines like a rocket. In this day and age...When it comes to creating professional, attractive, and effective websites, there is no company that can surpass Web Key India. Thanks to their talent, our site has taken off in the search engines like a rocket. In this day and age"
  },
  {
    name: "Iida Niskanen",
    position: "Data Entry",
    photo: "https://randomuser.me/api/portraits/women/67.jpg",
    text:
      "Don't know more but they provided the good solutions for my crashed website develop by others and fixed all the bug with an economical cost. 5 Stars for their hard and quality work, really they have nice team with good experience."
  },
  
  {
    name: "Renee Sims",
    position: "Receptionist",
    photo: "https://randomuser.me/api/portraits/women/8.jpg",
    text:
      "This guy does everything he can to get the job done and done right. This is the second time I've hired him, and I'll hire him again in the future."
  },
  {
    name: "Sasha Ho",
    position: "Accountant",
    photo:
      "https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?h=350&auto=compress&cs=tinysrgb",
    text:
      "This guy is a top notch designer and front end developer. He communicates well, works fast and produces quality work. We have been lucky to work with him!"
  },
  {
    name: "Veeti Seppanen",
    position: "Director",
    photo: "https://randomuser.me/api/portraits/men/97.jpg",
    text:
      "This guy is a young and talented IT professional, proactive and responsible, with a strong work ethic. He is very strong in PSD2HTML conversions and HTML/CSS technology. He is a quick learner, eager to learn new technologies. He is focused and has the good dynamics to achieve due dates and outstanding results."
  }
];

let idx = 0;

testimonials.forEach((testimonial) => {
  const dot = document.createElement("div");
  dot.classList.add("progress-dot");
  progressDots.appendChild(dot);
});

function displayTestimonial() {
  const { name, position, photo, text } = testimonials[idx];

  testimonial.innerHTML = text;
  userImage.src = photo;
  username.innerHTML = name;
  role.innerHTML = position;

  updateProgressDots();
}

function updateProgressDots() {
  const dots = progressDots.children;
  [...dots].forEach((dot) => {
    dot.classList.remove("active");
  });
  dots[idx].classList.add("active");
}

btnNext.addEventListener("click", () => {
  idx === testimonials.length - 1 ? (idx = 0) : idx++;
  console.log(idx);

  displayTestimonial();
});

btnPrev.addEventListener("click", () => {
  idx === 0 ? (idx = testimonials.length - 1) : idx--;
  console.log(idx);

  displayTestimonial();
});

displayTestimonial();

</script>
</body>
</html>