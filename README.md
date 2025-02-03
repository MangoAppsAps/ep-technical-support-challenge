# EasyPractice Technical Challenge

Welcome to the EasyPractice tech challenge! Below you'll find a list of tasks to complete on this project. Make sure you're familiar with Git, Laravel and Vue.js before starting. This challenge should take no more than 3 hours.

## Working on the challenge

1. Fork the repo, and then submit a Pull Request to your own fork
2. Copy `.env.example` to `.env`
3. Update the `.env` file to include the correct database connection details
4. Run `composer install`, `php artisan key:generate`, `php artisan migrate`, `npm install` and `npm run dev` (ignore the build warnings)
5. Run `php artisan db:seed` to populate the database
6. Open up the project in the browser and click on "Register" to create a new user. All the work will be done while logged in.
7. Code indentation should be set up at 4 spaces in both PHP and JS files.
8. Work through the tasks in a new branch named `challenge/{your-name}`. Commit as often as you like.
9. Once you have completed the tasks, create a **new Pull Request** and send us the link to it from your fork.

**Important**: Please DO NOT submit a Pull Request to the original repo, fork this one and submit a PR on your own repo :)

## Technical Support Challenge - Assessment Objectives
This technical support challenge evaluates candidates' ability to handle real-world support scenarios. We assess how candidates prioritize issues by distinguishing between critical system problems and individual user requests. Candidates should demonstrate clear problem-solving methodology, explain their thinking process, and justify their decisions about resource allocation.

Key evaluation areas include priority assessment, systematic problem analysis, solution development, and communication skills. We look for balanced judgment that considers both technical feasibility and business impact. While there are no strictly "right" answers, responses should show logical thinking and the ability to explain technical concepts clearly.

The challenge helps us identify candidates who can effectively troubleshoot issues while maintaining professional communication and documentation standards.

## The tickets

Please tackle each ticket in a different commit if possible.

### Support Ticket: Client Booking Visibility Issue 
- [ ] Please update ticket with findings and proposed solution:
```
Priority: Critical

What is the problem?:
When users visit a client's page in our system, they are unable to see that client's booking information. The booking data should be visible but nothing is displaying on the page.

What did I already do to try and solve it? (Ex.: recreate in own system, details gathered):
- Asked user to log out and log back in
- Checked with another user who has the same problem
- Confirmed with the user that they can see other parts of the client page
- Asked user to try a different browser but had the same issue

Example from the user (if necessary):
"When I click on any client, I can see their basic information, but the bookings section is completely empty."

What do I need help with now?:
Need guidance on troubleshooting why the booking data isn't being displayed.
```

### Support Ticket: Client Deletion Status Unclear
- [ ] Please update ticket with findings and proposed solution:
```
Priority: Medium

What is the problem?:
When users click to delete a client, nothing seems to happen on the screen. Users can't tell if the delete action worked or not, and they have to refresh the page to see if the client was actually removed.

What did I already do to try and solve it? (Ex.: recreate in own system, details gathered):
- Clicked delete button multiple times to see if anything happens
- Refreshed the page to check if client was actually deleted
- Tried deleting different clients to see if it happens every time

Example from the user (if necessary):
"I clicked to delete a client, but nothing changed on my screen. I wasn't sure if it worked or not. When I refreshed the page, the client was gone from the list, but it would be nice to know right away if the deletion worked."

What do I need help with now?:
Need the development team to add some kind of message or indication that lets users know when a client has been successfully deleted. Right now users are unsure if their action worked or not.
```
### SECURITY VULNERABILITY: Client Privacy Concern
- [ ] Please update ticket with findings and proposed solution:
```
Priority: Urgent

What is the problem?:
All users can see every client in the system, including clients they didn't create or aren't assigned to. This is causing privacy concerns as users should only be able to see their own clients.

What did I already do to try and solve it? (Ex.: recreate in own system, details gathered):
- Confirmed with several users that they can see everyone's clients
- Checked if there were any visible settings to limit client visibility
- Verified this happens for both new and existing users

Example from the user (if necessary):
"I can see all 500+ clients in the system, even ones from other departments and locations. I should only be able to see my own 50 clients. This doesn't seem right from a privacy perspective, and it makes it harder to find my actual clients in the list."

What do I need help with now?:
Need the technical team to implement proper privacy controls so users can only see their own clients or clients they're specifically assigned to. This is urgent as it's a privacy concern for our business.
```

### Support Ticket: Request for Booking Timeline Filter
- [ ] Please update ticket with findings and proposed solution:
```
Priority: Low

What is the problem?:
One user has requested an easier way to separate future bookings from past bookings, suggesting a filter to quickly view upcoming or past appointments.

What did I already do to try and solve it? (Ex.: recreate in own system, details gathered):
- Asked if other users have reported similar requests (none have)
- Checked if the current system prevents viewing necessary booking information (it doesn't)
- Verified users can still access all booking information, just requires scrolling through the list

Example from the user (if necessary):
"It would be nice if we could have a way to just see upcoming bookings without having to look through all the old ones. Maybe a filter or something? Right now I have to scroll through everything to find future appointments."

What do I need help with now?:
Need assessment from the technical team on:
1. Whether implementing a timeline filter is worth the development resources
2. How many users might actually use this feature
3. If this should be prioritized given that only one user has requested it and the current system, while less convenient, still allows users to access all booking information
```

### Support Ticket: System "Freezes" During Client Updates
- [ ] Please update ticket with findings and proposed solution:
```
Priority: Low

What is the problem?:
One user reported that sometimes when they try to update client information, the system appears to freeze and doesn't save their changes. They have to refresh the page and enter the information again.

What did I already do to try and solve it? (Ex.: recreate in own system, details gathered):
- Asked user about their internet connection when this happens
- Had them try clearing their browser cache
- Checked if they experience the same issue on different browsers
- Noted that the issue occurs more frequently when they're quickly clicking multiple times
- Tested on my computer and couldn't reproduce the issue

Example from the user (if necessary):
"Sometimes when I'm updating client details, nothing happens when I click save. The page just sits there, and I have to refresh and do everything again. It's really frustrating when I'm trying to quickly update information during a call with a client."

What do I need help with now?:
Need guidance on whether this is:
1. A system issue that needs fixing
2. A user training opportunity about proper system interaction
3. A potential local issue with the user's device or internet connection

Note: User mentioned they're working from home using satellite internet, and the issue seems to happen more when their connection is slow.
```

## Thank You!

Thank you so much for participating in this tech challenge. Hope you had fun! If you have any questions or suggestions, please email us at development@easypractice.net