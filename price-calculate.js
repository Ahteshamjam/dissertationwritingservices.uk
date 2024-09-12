    // Define the rate tables
        const rates = {
          'High School': {
            '15 Days +': 20,
            '12 Days': 25,
            '10 Days': 30,
            '7 Days': 35,
            '6 Days': 40,
            '5 Days': 45,
            '4 Days': 50,
            '3 Days': 55,
            '48 Hours': 60,
            '24 Hours': 70,
            '12 Hours': 80,
            '6 Hours': 100
          },
          'College / Undergraduate': {
            '15 Days +': 25,
            '12 Days': 30,
            '10 Days': 35,
            '7 Days': 40,
            '6 Days': 45,
            '5 Days': 50,
            '4 Days': 55,
            '3 Days': 60,
            '48 Hours': 65,
            '24 Hours': 75,
            '12 Hours': 85,
            '6 Hours': 105
          },
          'University': {
            '15 Days +': 30,
            '12 Days': 35,
            '10 Days': 40,
            '7 Days': 45,
            '6 Days': 50,
            '5 Days': 55,
            '4 Days': 60,
            '3 Days': 65,
            '48 Hours': 70,
            '24 Hours': 85,
            '12 Hours': 95,
            '6 Hours': 115
          },
          'Masters': {
            '15 Days +': 35,
            '12 Days': 40,
            '10 Days': 45,
            '7 Days': 50,
            '6 Days': 55,
            '5 Days': 60,
            '4 Days': 65,
            '3 Days': 70,
            '48 Hours': 75,
            '24 Hours': 95,
            '12 Hours': 105,
            '6 Hours': 125
          },
          'PhD': {
            '15 Days +': 45,
            '12 Days': 55,
            '10 Days': 65,
            '7 Days': 75,
            '6 Days': 85,
            '5 Days': 95,
            '4 Days': 105,
            '3 Days': 115,
            '48 Hours': 125,
            '24 Hours': 135,
            '12 Hours': 145,
            '6 Hours': 155
          },
          'Admission': {
            '15 Days +': 80,
            '12 Days': 85,
            '10 Days': 90,
            '7 Days': 95,
            '6 Days': 100,
            '5 Days': 105,
            '4 Days': 110,
            '3 Days': 120,
            '48 Hours': 140,
            '24 Hours': 150,
            '12 Hours': 190,
            '6 Hours': 210
          }
        };
    
        function updateTotalPrice() {
          // alert("Working");
          const level = document.getElementById('level').value;
          const deadline = document.getElementById('deadline').value;
          const pages = parseInt(document.getElementById('pages').value, 10);
    
          // console.log(level +" " + deadline + "" + pages);
    
          if (rates[level] && rates[level][deadline]) {
            const pricePerPage = rates[level][deadline];
            const totalPrice = pricePerPage * pages;
    
            // console.log(pricePerPage);
            // console.log(totalPrice);
    
            document.getElementById('total_price').innerText = `${totalPrice} AED`;
          }
        }
    
        window.onload = function () {
          updateTotalPrice()
        };
    
    // COUNTER JS
        $(document).ready(function () {
          $('.counter').counterUp({
            delay: 10,
            time: 1200
          });
        });