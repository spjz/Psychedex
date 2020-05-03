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


## Discussions

As a test subject, your historic data will be displayed in several viewing modes. There will be a chronological calendar view, where you may filter dates, substances, effects, tags, etc. Keyword searching will be available for all written notes contained in the experience report.
Reports will be presented with two main components. There will be a loosely structured text component, where you may describe the experience however you desire. Each paragraph or section will be labelled according to common periods, such as "preparation", "onset", "peak", "conclusion", and so on.
The other component is the chronological data points, of which there are three types: notes, which permit short comments such as current emotional state, brief observations, or anything really; administrations, which require a material such as a specific chemical compound, some organism, or product, along with the dosage and route; finally there are effects, so any time a user observes some change in perception, they can select it from PW's library, or describe their own, along with a rating of intensity and any comment.
This data will all be aggregated once submitted, such that users may find reports for any substance, or effect, and filter them by many variables, to receive a list of all relevant experiences.
The reliability of experience reports will vary, and the depth of information that each user may decide to record will also vary. I expect that as we accumulate more data, the analytics we produce will become increasingly accurate, as a trend should be apparent for similar doses of some material. Outliers will be easy to identify as they will diverge greatly from the typical report. These can be flagged by enthusiastic users as questionable, and we can then allow users to configure the reliability of reports that they wish to include in their results

So for example, user selects LSD from the psychedex, they see several options: overview, information, experiences, resources, etc.
Overview is the default display (may also be configured which option to show by default), which simply shows an abstract of the substance information, and some lists of experiences filtered by some preconfigured filter (also configurable), resources are a collection of external links. All the data for a substance is user generated, so until the psychedex is filled in, we may prioritise the external references.
If you select information you will see something like psychonautwiki's articles, though the content will be more standardised and expanded to include more sections. Users may submit changes to these sections, and other users may vote to support or dispute the edit. Some threshold of votes is necessary to validate a change, but the history of changes, and any pending are all visible to users who wish to view or vote on them.
The experiences section will be as I described above. It is basically a preset filter for the main experience browser, where the substance is selected already. User may refine the filters in many ways, save their selections, vote on reports, save and share, etc.
Resources will be a user curated list of external websites which contain references to the substance. Again there will be a standard feature supporting filters and search, where in this context, the substance is already selected

Users may configure their privacy settings in their profile. By default your profile is not publicly visible, your reports do not appear in results. You may choose to share your profile, and customise the information which appears in it, such as a username, a display picture, website, etc.
You may also set your reports to public by default, so they will appear in the library, or such that you can only access them with a permalink, so they can be accessed if you share them with somebody, but they do not appear in the library.
Individual reports may also be configured individually to be public or private.
The experience data for all reports will however be used to generate the graphs and analytical results. They will appear in any lists as "private report by anonymous", for example
None of it will be required. There will be a list of standard section titles which we recognise, for example "pharmacology", "chemistry", "discovery", "legal", etc. Users may add these as they desire, and all additions or alterations will require a source and must be approved by peers before becoming publicly visible


None of it will be required. There will be a list of standard section titles which we recognise, for example "pharmacology", "chemistry", "discovery", "legal", etc. Users may add these as they desire, and all additions or alterations will require a source and must be approved by peers before becoming publicly visible
This set of events will be aggregated with all reports for a given substance (this can also be aggregated by other variables, such as a specific effect, or something else), and analytical methods will be used to present this data in some meaningful way on a graph or table

We don't need the data analytics feature to be voluminous immediately. It will gradually increase in reliability as more data is collected. One single report is enough to begin showing some graphs and tables though. If you go back and read all my descriptions from tonight you will clearly see that the drug information sections will work effectively like a wiki, and when no information is yet available, the remaining section will be external resource aggregation.
So I suggest we build all the supporting features, and configure clever presets which show the most useful information currently available, and as the thing grows it will become more impressive and attract more user interaction
Privacy is not a concern in my opinion, simply all data is optional for the user to submit, and reports can be private if desired. Detailed documentation will be clearly presented to relieve any paranoia. The system can work as a simple private experience log, or users can contribute to the global analytics project. The main reason I believe this will be successful and extremely useful, is that no such data is possible to collect on academia, for ethical and legal reasons

Privacy is not a concern in my opinion, simply all data is optional for the user to submit, and reports can be private if desired. Detailed documentation will be clearly presented to relieve any paranoia. The system can work as a simple private experience log, or users can contribute to the global analytics project. The main reason I believe this will be successful and extremely useful, is that no such data is possible to collect on academia, for ethical and legal reasons
I think a user should be able to secure their profile with a private key, and perhaps grant access to it by others' authorised public keys. Other users may be happy with a simple pass phrase. Others will be ok with anonymous public submissions. I want to support as many mechanisms as reasonably possible
Only blog-like aspect of reports will be possible to delist from the library. Timeline data will always be utilised, though not necessarily searchable in relation to the report permalink which the user decides the level of publicity



