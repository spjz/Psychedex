# Psychedex

## Intended purpose

- Psychedex is a novel opportunity to acquire scientific research data in the field of psychopharmacological experience;
- An open source platform consisting of a comprehensive database and related documentation, an equally robustly documented API service layer using REST model, and provided over HTTPS;
- External resources including documentation, forums, databases, applications, etc, are all categorised and aggregated to improve accessibility of information related to a particular subject;
- Intends to supercede, dismiss, and replace, any and all existing services providing similar functionality by implementing a superior service in all possible areas;
- The user interface and associated experience will be intuitive, simple and elegant, also expandabled and customisable.

## Primary features

### Psychoactive materials database
* Classification (chemical, pharmacological, taxonomic, etc)
* Structure and chemical properties
* Description
* Discovery
* Production
* Maintainence (*storage, stability, farming, extraction, etc)
* Health, legal, social, etc. consequences
* Objective, subjective effects
* Statistical data summary
* Traditional reports archive
* Relationships (potentialy use TripSit's data for combo harm potential)

### Subjective effect index
* Ripped from Pschonaut Wiki, preferably synchronised via their API
* Associated with a particular substance and time of recognition by users during data collection
* Possible to suggest new effects for submission to PW

### Psychoactive materials external source library
* Forums
* Databses
* Wikis
* Archives
* Journals

### Private/friends/public user profile
* User can specify default privaxcy settings and override these for each experience
* Private reports are omitted from public lists, but data remains utilised for analytical purposes
* Public profile displays feed of new experience reports as they are approved as appropriate
* Shows friends and their recent submissions according to their privacy settings
* User account does not require any personally identifiable information
* Unique identification string used to differentiate user accounts
* Easy sharing of public profile, specific experience, etc. permalinks 

### Psychoactive experience data collection interface
* Intuitive user experience, HTML form with client-side validation and prompts
* Designed to mitigate impaired sobriety, reduced concentration and comprehension
* Records data chronologically, as few required fields as possible, all data is optional where possible

#### Experience report builder 
The most important feature is arguably the report interface, as it is where the user is required to enter the data related to their experience, for its inclusion in the database and utilisation for analysis to predict experiences for variable parameters. It is thus critical that the experience of entering data be as simple, elegant, and entertaining as possible, as the user is not expected to be in a highly capable condition at the time;
This can be achieved by simplifying the organisational structure of form elements. For example, the highest level view is a simple linear chronology, beginning at time `t0`, and growing as the session goes on. At any time the user may press a button on the timeline to create a new entry for either a new dose of some material, or recognition of a subjective effect.
Addition of a new dosage will display a form containing a select box listing first the previous substance added to the timeline if it exists, followed by any other substances used in the ongoing report, then those of previously submitted reports, then common popular materials, and finally as organised by several category trees of the various classification types (chemical, pharmacological, etc), a search field is included in the select box to support filtering the list by some phrase.
It may also be possible for users to create new substance suggestions from within the report submission interface, however in a very reduced capacity, such as being able to add an unconfirmed drug by name alone, and then later contacting the user to complete the data set for their suggested drug. Likewise, users can add new subjective effects if a suitable type is not listed by PW.
As well as selecting subjective effects at a particular time, users may submit physiological data if they choose to measure it, such as heart rate, perveived level of pain, intoxication, etc. Instructions on how to provide this data would accompany the input fields, such as how to read a cardiometer.
All chronological entries would be accompanied with a score for variables including level of intoxication, current mood, etc. The timeline would continue until its expected duration according to the analysis of existing data, but may be extended or terminated at any time, at the user's discression. Following the completion of the timeline, the user is requested to summarise their experience by submitting a short description of their experience. At any time a user may also add a note to the timeline with a description of their state of mind.

###* Psychoactive experience prediction engine
* Presents analytical graphs to project the average user experience for a specific drug or combination
* Several other data filtration schemes including best fit for users biological health parameters (age, height, weight, etc)
* Interactive, animated visualisation: tooltips on hover, toggle labels, resize graph area, export images, colour theme, resolution, etc

