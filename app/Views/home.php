
    <div class="image__carousel ">
      <div id="carouselExampleCaptions" class="carousel slide">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./Images/slide1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./Images/slide2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> -->
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url('assets/Images/slide1.png');?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('assets/Images/slide2.png');?>" class="d-block w-100" alt="...">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="about__kb" id="about__kb" style="background-image: url(<?php echo base_url('assets/Images/bg.jpg');?>)">
      <h2>About <span>कृषि</span> Bharat</h2>
      <p>
        Our agriculture platform endeavors to create a comprehensive ecosystem
        that integrates advanced technology and AI-driven solutions to empower
        stakeholders across the agricultural value chain By offering features
        such as smart crop auctions, market intelligence, crop management, and
        supply chain visibility, we aim to streamline operations and enhance
        decision-making for farmers, traders, and merchants.. Through community
        engagement initiatives, we seek to foster collaboration, knowledge
        sharing, and continuous learning, creating a vibrant community that
        drives innovation and sustainability in the agricultural industry. With
        a focus on scalability, mobile accessibility, and security, our platform
        is poised for future expansion and adaptation to emerging trends,
        ensuring its relevance and impact in shaping the future of agriculture.
      </p>
    </div>

    <div class="features__flex">
      <h1 id="features">Features</h1>
      <div class="flex__card">
        <div class="main__card">
          <div class="flex__left">
            <h2>Smart Crop Auctions:</h2>
            <p>
              The platform enables farmers to list their crops for sale using
              their mobile devices, streamlining the auction process. Traders
              and merchants can bid on crops in real-time through an AI-powered
              auction system, ensuring fair pricing and efficient transactions.
              Farmers have full control over their listings, including setting
              reserve prices and managing bids, enhancing transparency and trust
              in the auction process.
            </p>
          </div>
          <div class="flex__right">
            <img src="<?php echo base_url('assets/Images/smartAuctions.jpg');?>" alt="Img of Auction" />
          </div>
        </div>

        <div class="main__card">
          <div class="flex__left">
            <img src="<?php echo base_url('assets/Images/marketIntelligence.jpg');?>" alt="Dashboard" />
          </div>
          <div class="flex__right">
            <h2>Market Intelligence Dashboard:</h2>
            <p>
              The platform provides a comprehensive dashboard displaying
              real-time market trends, price fluctuations, and demand-supply
              dynamics for agricultural commodities. Farmers, traders, and
              merchants can access accurate and up-to-date information to make
              informed decisions about crop pricing, market timing, and
              inventory management. Customizable data visualization tools allow
              users to analyse market trends and identify opportunities for
              optimizing their operations and maximizing profits.
            </p>
          </div>
        </div>

        <div class="main__card">
          <div class="flex__left">
            <h2>AI-Driven Crop Management:</h2>
            <p>
              Advanced AI algorithms enable predictive crop management, allowing
              farmers to forecast crop yields, monitor pest and disease
              outbreaks, and assess soil health. Farmers receive actionable
              insights and recommendations based on data analysis, enabling them
              to make proactive decisions to enhance crop productivity and
              quality. The platform's AI capabilities continuously learn and
              adapt to changing environmental conditions, providing farmers with
              tailored recommendations for optimizing their farming practices
              throughout the crop lifecycle.
            </p>
          </div>
          <div class="flex__right">
            <img
              src="<?php echo base_url('assets/Images/cropManagement.jpg');?>"
              alt="AI-Driven Crop Management"
            />
          </div>
        </div>

        <div class="main__card">
          <div class="flex__left">
            <img src="<?php echo base_url('assets/Images/supplyChain.jpg');?>" alt="Supply Chain" />
          </div>
          <div class="flex__right">
            <h2>Seamless Supply Chain Management:</h2>
            <p>
              The platform offers end-to-end visibility into the supply chain,
              from farm to market, enabling efficient logistics and inventory
              management. Integration with automated transportation systems
              allows for the seamless coordination of crop deliveries,
              optimizing routes and reducing transportation costs. Farmers and
              buyers can track the status of their shipments in real-time,
              ensuring timely and secure delivery of crops to their intended
              destinations.
            </p>
          </div>
        </div>

        <div class="main__card">
          <div class="flex__left">
            <h2>User-Friendly Interface:</h2>
            <p>
              The platform features a mobile-friendly design and intuitive user
              interface, making it easy for farmers, traders, and merchants to
              navigate and access key features. User profiles and personalized
              dashboards provide customized experiences tailored to the specific
              needs and preferences of each user. Built-in tutorials and help
              resources guide users through the platform's features and
              functionalities, ensuring a seamless onboarding experience for new
              users.
            </p>
          </div>
          <div class="flex__right">
            <img
              src="<?php echo base_url('assets/Images/userFriendlyInterface.jpg');?>"
              alt="User Friendly Interface"
            />
          </div>
        </div>

        <div class="main__card">
          <div class="flex__left">
            <img
              src="<?php echo base_url('assets/Images/communityEngagement.jpg');?>"
              alt="Community Engagement"
            />
          </div>
          <div class="flex__right">
            <h2>Community Engagement:</h2>
            <p>
              The platform fosters a vibrant community of farmers, experts, and
              enthusiasts through forums, discussion boards, and collaborative
              networks. Users can share insights, exchange best practices, and
              seek advice from peers, creating a supportive and collaborative
              environment for knowledge sharing and continuous learning.
              Expert-led webinars, workshops, and educational resources provide
              users with opportunities to expand their skills and stay informed
              about the latest developments in agriculture and technology.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="about__us" id="about_us" style="background-image: url(<?php echo base_url('assets/Images/bg.jpg');?>)">
      <h2>About Us</h2>
      <p>
        Our mission is to revolutionize agricultural trade by providing a
        transparent, efficient, and inclusive online auction platform for
        farmers, traders, and buyers. We envision a future where every farmer
        has access to a global marketplace, where transparency and fairness
        prevail, and where technology empowers stakeholders to thrive in the
        agricultural industry. Our vision is to bridge the gap between farmers
        and buyers, fostering a community-driven ecosystem that promotes
        sustainability, innovation, and prosperity. By leveraging digital
        solutions, market insights, and collaborative networks, we aim to
        redefine the way crops are bought and sold, creating value for all
        participants and driving positive change in the agricultural landscape..
      </p>
    </div>

    <!-- <div class="updates">
      <h2>Updates</h2>
      <div class="flex__updates">
        <div class="update__card">
          <div class="flex__top"></div>
          <div class="flex__bottom"></div>
        </div>
        <div class="update__card">
          <div class="flex__top"></div>
          <div class="flex__bottom"></div>
        </div>
        <div class="update__card">
          <div class="flex__top"></div>
          <div class="flex__bottom"></div>
        </div>
      </div>
    </div> -->

    <div class="contact__us" id="contact__us">
      <h2>Contact Us</h2>
      <div class="flex__contact">
        <div class="flex__con">
          <div class="flex__con__top">
            <div class="con1">
              <h3>Our Address</h3>
              <p>
                Parul University, <br />Waghodia, <br />
                Limda, Ta. Waghodia, <br />Vadodara - 391760, Gujarat, India
              </p>
            </div>
          </div>
          <div class="flex__con__bottom">
            <div class="con2">
              <img src="<?php echo base_url('assets/svg/Email.svg');?>" alt="Email" />
              <p>vanrajk16@gmail.com</p>
            </div>
            <div class="con3">
              <img src="<?php echo base_url('assets/svg/Phone.svg');?>" alt="Phone" />
              <p>+91 9228233008</p>
            </div>
          </div>
        </div>
        <div class="contact__img">
          <img src="<?php echo base_url('assets/Images/contactUs.jpg');?>" alt="Contact Us" />
        </div>
      </div>
    </div>

  
    <div class="sns">
      <p>Follow us on:</p>
      <div class="sns__insta">
        <img src="<?php echo base_url('assets/svg/instagram.svg');?>" alt="Instagram" />
      </div>
      <div class="sns__linkedin">
        <img src="<?php echo base_url('assets/svg/linkedin.svg');?>" alt="Linkedin" />
      </div>
    </div>

    <footer>
      <p>Copyright © Krishi Bharat 2024 All Rights Reserved.</p>
    </footer>
  </body>
</html>