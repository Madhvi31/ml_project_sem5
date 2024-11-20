# Future Focus: Job and Course Recommendation System
## Problem Statement
Choosing the right career is a challenging decision for many students, often leading to confusion
despite possessing skills and abilities. Engineering students, in particular, often lack proper
guidance and clarity about their career paths. Traditional career guidance systems primarily
focus on academic factors while overlooking key elements such as individual interests,
psychometric attributes, and skills.
**Future Focus** addresses these limitations using machine learning techniques to recommend
suitable career options and courses. By analyzing academic information and psychometric
attributes such as speed, learning capacity, endurance, and memory, the system narrows down
recommendations to two career fields most aligned with a student’s profile. Students can further
explore these fields and receive personalized course suggestions to develop the required skills.
Unlike traditional systems that rely on basic techniques like data mining, **Future Focus**
employs advanced algorithms such as K-nearest neighbors (KNN), feature vectors, and cosine
similarity for accurate and scalable predictions. The dual-layer recommendation system—career
paths based on skills and courses tailored to interests—ensures actionable, personalized, and
reliable guidance for students.
## Key Features
1. **Discover Yourself**: Personalized tests analyze abilities, interests, and plans to suggest
tailored career paths using AI/ML.
2. **Skill Prediction and Job Recommendation**: Machine learning predicts skills and
recommends courses to help students explore and excel in suggested fields.
3. **Online Course Integration**: Direct links to online learning platforms enable skill
enhancement in recommended career areas.
4. **Blogs and Industry Insights**: Curated blogs on career development, skill-building, and
industry trends provide valuable guidance.
## Technology Stack
The project uses the following technologies:
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP, Python
- **Database**: MySQL
## Implementation Details
### Algorithm: K-Nearest Neighbors (KNN)
The KNN algorithm is a supervised machine learning technique used for classification and
regression. It classifies new data points based on similarity to existing categories.
**Steps in KNN Algorithm**:
1. Select the number \( K \) of neighbors.
2. Calculate the Euclidean distance of \( K \) neighbors.
3. Identify the \( K \)-nearest neighbors based on calculated distances.
4. Count the data points in each category among the \( K \) neighbors.
5. Assign the new data point to the category with the maximum neighbors.
6. The model is now ready for predictions.
**Advantages**:
- Simple to implement and versatile for both classification and regression tasks.
- Effective for nonlinear data without assumptions about its distribution.
- Robust to noisy data and performs better with larger training datasets.
**Disadvantages**:
- Choosing the optimal value of \( K \) can be challenging.
- High computational cost due to distance calculations for all samples.
- Requires significant memory and is sensitive to data scaling and irrelevant features.
## System Design
1. **Discover Yourself**: Personalized tests to analyze abilities, interests, and plans.
2. **Skill Prediction and Job Recommendation**: Predict skills and recommend relevant
courses.
3. **Online Course Integration**: Links to learning platforms for recommended fields.
4. **Blogs and Insights**: Informative blogs on career and skill development.
## Project Goals
- Provide accurate and scalable career and course recommendations.
- Enable students to align their skills and interests with their career paths.
- Support students in making informed and confident career decisions.
## Conclusion
By integrating academic and aptitude assessments, **Future Focus** offers a personalized and
accurate recommendation system. It helps students explore career opportunities, plan their
education, and enhance their skills to achieve their goals.
## Keywords
- Machine Learning
- Web Development
- Course Recommendation System
- Career Prediction
## License
This project is licensed under the [MIT License](LICENSE).
