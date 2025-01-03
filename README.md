## About this project
Use GCP to deploy website(laravel, mysql), use GCP services:
- Cloud run
- SQL 

## Step to upload repo to GCP

- Pull code
- Build code 

`sudo docker buildx build --platform linux/amd64 -t gcr.io/huynd-445301/laravel-app .`

- Push code to GCP
`docker push gcr.io/huynd-445301/laravel-app   `

step 3: 
```
gcloud run deploy laravel-app \                                                     
  --image gcr.io/huynd-445301/laravel-app \
  --platform managed \
  --region asia-southeast1 \
  --allow-unauthenticated \
  --add-cloudsql-instances huynd-445301:asia-southeast1:laravel-mysql-instance

```

## Website
https://laravel-app-280562468421.asia-southeast1.run.app/
