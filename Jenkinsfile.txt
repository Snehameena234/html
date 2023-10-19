pipeline{
    agent any
    stages{
        stage('Delete existing docker image and container'){
            steps{
            checkout scmGit(branches: [[name: '*/main']], extensions: [], userRemoteConfigs: [[url: 'https://github.com/Snehameena234/html']])
            script{
            bat 'docker rmi -f snehameena20/html:latest'
            bat 'docker rm -f snehameena20/html:latest'
            }
            }
        }
        stage('Build Docker image'){
            steps{
            script{
            bat 'docker build -t snehameena20/html .'
            }
            }
        }
        stage('Push image to Docker Hub'){
            steps{
            script{
            bat 'docker login -u "snehameena20" -p "Sneha@2002" docker.io'
            bat 'docker push snehameena20/html:latest'
            }
            }
        }
        stage('Creating new Container'){
            steps{
                script{
                    bat 'docker run -it -d -P --name=cont_html snehameena20/html'
            }
        }
    }
}
}
