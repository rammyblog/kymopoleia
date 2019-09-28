![Build Status](C:\Users\Michaelzy\Downloads\Homepage.png)
<div align="center">

![hng](https://res.cloudinary.com/iambeejayayo/image/upload/v1554240066/brand-logo.png)

<br>

</div>
# **Kymopoleia Budget App**

This a Budget App created by team Kymopoleia of HNG Internship. The Budget App, "BudgIt" is a user friendly app with a lot 
of functionalities.

## Installation Guide

- You need a php server, download Xampp or Wamp
- Clone this repository into your `htdocs`  folder in the server you downloaded.
- If you have not been added to the organization, kindly work in your own forked repository and open a pull request here.
- Fork the repository and push to your `staging branch`.
- Merge to your `master` and compare forks with the original repository
- Open a Pull Request.
- **Read [this](https://help.github.com/en/articles/creating-a-pull-request-from-a-fork) or watch [this](https://www.youtube.com/watch?v=G1I3HF4YWEw) for more help**
```bash
git clone https://github.com/hngi/kymopoleia.git
```

```bash
cd hng.tech
```

```bash
cp .env.example .env
```

```bash
php -S localhost:8000
```

```bash
Visit localhost:8000 in your browser
```
# Contribution Guide

```bash
git checkout staging
```

The template for your profile page can be found here
`views/interns/template.php`

- Copy the contents of that file
- Create a new file with your slack username, e.g `mark.php`
- Paste the contents there
- Now your page should be assesible via `localhost:8000/interns/mark`
  ![hng profile](https://res.cloudinary.com/iambeejayayo/image/upload/v1554302765/download.png)
- Edit the contents of the file to your profile details
- Push to `staging` branch and open a pull request
- Wait for review

**Ensure you read this doc [here](https://docs.google.com/document/d/1TxZqGLsut4ZVJEP6xF-DZGq3goaHfQ2phF-1I3YbrNc/edit?usp=sharing) for complete instructions** <br>
Failure to do this will warant closing your pull request

## Features
 - Calculates total available budget
 - Priorities of items, to be set by user (High, Medium and Low)
 - Allocation to items based on priorities.

# Description
The user creates an account with the app, to enable him/her login any other place at any time, and logs in to the welcome
page. The user then inputs the total available budget, as well as other minor details like "Budget title", "Start time" 
etc. Next, User adds an item, set its priority and enter the amount of the item. User can add multiple items to the list.
The app then calculates how much each item gets based on the assigned priorities.



> The idea is to make budgetting a whole lot 
> easier for the world

### Additional Info

Like our App? Here is the Official [Kymopoleia Design Link](https://www.figma.com/file/gIV5vWqxpiz6lrpu8OqDoI/Budget-app?node-id=8%3A3). Visit it to suggest ideas, rate and leave a comment on the app.

