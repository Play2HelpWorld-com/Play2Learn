// Select DOM elements to work with
const welcomeDiv = document.getElementById("welcomeMessage");
const signInButton = document.getElementById("signIn");
const signOutButton = document.getElementById('signOut');
const cardDiv = document.getElementById("card-div");
const mailButton = document.getElementById("readMail");
const profileButton = document.getElementById("seeProfile");
const profileDiv = document.getElementById("profile-div");


function showWelcomeMessage(account) {

  $.ajax({
    url: 'microsoft.php',
    type: 'post',
    data: {
      name: account.name,
      email: account.userName,
      provider_name: 'microsoft'
    },
    success: function (response) {
      let result = JSON.parse(response);
      let response_message = result.message;
      let statuscode = result.code;
      if (statuscode === 200) {
        localStorage.setItem("logged_in", "true");
        localStorage.setItem("email", account.userName);
        $(".custom-model-main").removeClass("model-open");
      } else {
        alert(response_message);
      }

    },
    error: function (error) {
      // await fbLogoutUser();
    }
  });

}

function updateUI(data, endpoint) {
  console.log('Graph API responded at: ' + new Date().toString());

  if (endpoint === graphConfig.graphMeEndpoint) {
    profileDiv.innerHTML = '';
    const title = document.createElement('p');
    title.innerHTML = "<strong>Title: </strong>" + data.jobTitle;
    const email = document.createElement('p');
    email.innerHTML = "<strong>Mail: </strong>" + data.mail;
    const phone = document.createElement('p');
    phone.innerHTML = "<strong>Phone: </strong>" + data.businessPhones[0];
    const address = document.createElement('p');
    address.innerHTML = "<strong>Location: </strong>" + data.officeLocation;
    profileDiv.appendChild(title);
    profileDiv.appendChild(email);
    profileDiv.appendChild(phone);
    profileDiv.appendChild(address);
    
  } else if (endpoint === graphConfig.graphMailEndpoint) {
      if (data.value.length < 1) {
        alert("Your mailbox is empty!")
      } else {
        const tabList = document.getElementById("list-tab");
        tabList.innerHTML = ''; // clear tabList at each readMail call
        const tabContent = document.getElementById("nav-tabContent");

        data.value.map((d, i) => {
          // Keeping it simple
          if (i < 10) {
            const listItem = document.createElement("a");
            listItem.setAttribute("class", "list-group-item list-group-item-action")
            listItem.setAttribute("id", "list" + i + "list")
            listItem.setAttribute("data-toggle", "list")
            listItem.setAttribute("href", "#list" + i)
            listItem.setAttribute("role", "tab")
            listItem.setAttribute("aria-controls", i)
            listItem.innerHTML = d.subject;
            tabList.appendChild(listItem)
    
            const contentItem = document.createElement("div");
            contentItem.setAttribute("class", "tab-pane fade")
            contentItem.setAttribute("id", "list" + i)
            contentItem.setAttribute("role", "tabpanel")
            contentItem.setAttribute("aria-labelledby", "list" + i + "list")
            contentItem.innerHTML = "<strong> from: " + d.from.emailAddress.address + "</strong><br><br>" + d.bodyPreview + "...";
            tabContent.appendChild(contentItem);
          }
        });
      }
  }
}